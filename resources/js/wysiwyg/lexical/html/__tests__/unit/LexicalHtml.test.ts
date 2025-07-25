/**
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 *
 */

//@ts-ignore-next-line
import type {RangeSelection} from 'lexical';

import {createHeadlessEditor} from '@lexical/headless';
import {$generateHtmlFromNodes, $generateNodesFromDOM} from '@lexical/html';
import {LinkNode} from '@lexical/link';
import {ListItemNode, ListNode} from '@lexical/list';
import {
  $createParagraphNode,
  $createRangeSelection,
  $createTextNode,
  $getRoot,
} from 'lexical';
import {HeadingNode} from "@lexical/rich-text/LexicalHeadingNode";
import {QuoteNode} from "@lexical/rich-text/LexicalQuoteNode";

describe('HTML', () => {
  type Input = Array<{
    name: string;
    html: string;
    initializeEditorState: () => void;
  }>;

  const HTML_SERIALIZE: Input = [
    {
      html: '<p><br></p>',
      initializeEditorState: () => {
        $getRoot().append($createParagraphNode());
      },
      name: 'Empty editor state',
    },
  ];
  for (const {name, html, initializeEditorState} of HTML_SERIALIZE) {
    test(`[Lexical -> HTML]: ${name}`, () => {
      const editor = createHeadlessEditor({
        nodes: [
          HeadingNode,
          ListNode,
          ListItemNode,
          QuoteNode,
          LinkNode,
        ],
      });

      editor.update(initializeEditorState, {
        discrete: true,
      });

      expect(
        editor.getEditorState().read(() => $generateHtmlFromNodes(editor)),
      ).toBe(html);
    });
  }

  test(`[Lexical -> HTML]: Use provided selection`, () => {
    const editor = createHeadlessEditor({
      nodes: [
        HeadingNode,
        ListNode,
        ListItemNode,
        QuoteNode,
        LinkNode,
      ],
    });

    let selection: RangeSelection | null = null;

    editor.update(
      () => {
        const root = $getRoot();
        const p1 = $createParagraphNode();
        const text1 = $createTextNode('Hello');
        p1.append(text1);
        const p2 = $createParagraphNode();
        const text2 = $createTextNode('World');
        p2.append(text2);
        root.append(p1).append(p2);
        // Root
        // - ParagraphNode
        // -- TextNode "Hello"
        // - ParagraphNode
        // -- TextNode "World"
        p1.select(0, text1.getTextContentSize());
        selection = $createRangeSelection();
        selection.setTextNodeRange(text2, 0, text2, text2.getTextContentSize());
      },
      {
        discrete: true,
      },
    );

    let html = '';

    editor.update(() => {
      html = $generateHtmlFromNodes(editor, selection);
    });

    expect(html).toBe('World');
  });

  test(`[Lexical -> HTML]: Default selection (undefined) should serialize entire editor state`, () => {
    const editor = createHeadlessEditor({
      nodes: [
        HeadingNode,
        ListNode,
        ListItemNode,
        QuoteNode,
        LinkNode,
      ],
    });

    editor.update(
      () => {
        const root = $getRoot();
        const p1 = $createParagraphNode();
        const text1 = $createTextNode('Hello');
        p1.append(text1);
        const p2 = $createParagraphNode();
        const text2 = $createTextNode('World');
        p2.append(text2);
        root.append(p1).append(p2);
        // Root
        // - ParagraphNode
        // -- TextNode "Hello"
        // - ParagraphNode
        // -- TextNode "World"
        p1.select(0, text1.getTextContentSize());
      },
      {
        discrete: true,
      },
    );

    let html = '';

    editor.update(() => {
      html = $generateHtmlFromNodes(editor);
    });

    expect(html).toBe(
      '<p>Hello</p>\n<p>World</p>',
    );
  });

  test(`If alignment is set on the paragraph, don't overwrite from parent empty format`, () => {
    const editor = createHeadlessEditor();
    const parser = new DOMParser();
    const rightAlignedParagraphInDiv =
      '<div><p style="text-align: center;">Hello world!</p></div>';

    editor.update(
      () => {
        const root = $getRoot();
        const dom = parser.parseFromString(
          rightAlignedParagraphInDiv,
          'text/html',
        );
        const nodes = $generateNodesFromDOM(editor, dom);
        root.append(...nodes);
      },
      {discrete: true},
    );

    let html = '';

    editor.update(() => {
      html = $generateHtmlFromNodes(editor);
    });

    expect(html).toBe(
      '<p class="align-center">Hello world!</p>',
    );
  });

  test(`If alignment is set on the paragraph, it should take precedence over its parent block alignment`, () => {
    const editor = createHeadlessEditor();
    const parser = new DOMParser();
    const rightAlignedParagraphInDiv =
      '<div style="text-align: right;"><p style="text-align: center;">Hello world!</p></div>';

    editor.update(
      () => {
        const root = $getRoot();
        const dom = parser.parseFromString(
          rightAlignedParagraphInDiv,
          'text/html',
        );
        const nodes = $generateNodesFromDOM(editor, dom);
        root.append(...nodes);
      },
      {discrete: true},
    );

    let html = '';

    editor.update(() => {
      html = $generateHtmlFromNodes(editor);
    });

    expect(html).toBe(
      '<p class="align-center">Hello world!</p>',
    );
  });
});
