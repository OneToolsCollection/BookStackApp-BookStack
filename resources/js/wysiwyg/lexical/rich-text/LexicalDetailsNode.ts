import {
    DOMConversion,
    DOMConversionMap, DOMConversionOutput,
    ElementNode,
    LexicalEditor,
    LexicalNode,
    SerializedElementNode, Spread,
    EditorConfig, DOMExportOutput,
} from 'lexical';

import {extractDirectionFromElement} from "lexical/nodes/common";

export type SerializedDetailsNode = Spread<{
    id: string;
    summary: string;
}, SerializedElementNode>

export class DetailsNode extends ElementNode {
    __id: string = '';
    __summary: string = '';

    static getType() {
        return 'details';
    }

    setId(id: string) {
        const self = this.getWritable();
        self.__id = id;
    }

    getId(): string {
        const self = this.getLatest();
        return self.__id;
    }

    setSummary(summary: string) {
        const self = this.getWritable();
        self.__summary = summary;
    }

    getSummary(): string {
        const self = this.getLatest();
        return self.__summary;
    }

    static clone(node: DetailsNode): DetailsNode {
        const newNode =  new DetailsNode(node.__key);
        newNode.__id = node.__id;
        newNode.__dir = node.__dir;
        newNode.__summary = node.__summary;
        return newNode;
    }

    createDOM(_config: EditorConfig, _editor: LexicalEditor) {
        const el = document.createElement('details');
        if (this.__id) {
            el.setAttribute('id', this.__id);
        }

        if (this.__dir) {
            el.setAttribute('dir', this.__dir);
        }

        const summary = document.createElement('summary');
        summary.textContent = this.__summary;
        summary.setAttribute('contenteditable', 'false');
        el.append(summary);

        return el;
    }

    updateDOM(prevNode: DetailsNode, dom: HTMLElement) {
        return prevNode.__id !== this.__id
        || prevNode.__dir !== this.__dir;
    }

    static importDOM(): DOMConversionMap|null {
        return {
            details(node: HTMLElement): DOMConversion|null {
                return {
                    conversion: (element: HTMLElement): DOMConversionOutput|null => {
                        const node = new DetailsNode();
                        if (element.id) {
                            node.setId(element.id);
                        }

                        if (element.dir) {
                            node.setDirection(extractDirectionFromElement(element));
                        }

                        const summaryElem = Array.from(element.children).find(e => e.nodeName === 'SUMMARY');
                        node.setSummary(summaryElem?.textContent || '');

                        return {node};
                    },
                    priority: 3,
                };
            },
            summary(node: HTMLElement): DOMConversion|null {
                return {
                    conversion: (element: HTMLElement): DOMConversionOutput|null => {
                        return {node: 'ignore'};
                    },
                    priority: 3,
                };
            },
        };
    }

    exportDOM(editor: LexicalEditor): DOMExportOutput {
        const element = this.createDOM(editor._config, editor);
        const editable = element.querySelectorAll('[contenteditable]');
        for (const elem of editable) {
            elem.removeAttribute('contenteditable');
        }

        return {element};
    }

    exportJSON(): SerializedDetailsNode {
        return {
            ...super.exportJSON(),
            type: 'details',
            version: 1,
            id: this.__id,
            summary: this.__summary,
        };
    }

    static importJSON(serializedNode: SerializedDetailsNode): DetailsNode {
        const node = $createDetailsNode();
        node.setId(serializedNode.id);
        node.setDirection(serializedNode.direction);
        return node;
    }

}

export function $createDetailsNode() {
    return new DetailsNode();
}

export function $isDetailsNode(node: LexicalNode | null | undefined): node is DetailsNode {
    return node instanceof DetailsNode;
}
