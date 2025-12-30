#!/bin/sh

# Git 2.35+ may refuse to operate on bind-mounted repos with differing ownership ("dubious ownership").
# Mark /app as safe within the container.
git config --global --add safe.directory /app 2>/dev/null || true

set -e

npm install
npm rebuild node-sass

SHELL=/bin/sh exec npm run watch
