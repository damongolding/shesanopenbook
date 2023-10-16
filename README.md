# She's an open book

## Where are my 'pages'?

They are located in `src/pages`

## Where is my css file?

It is in `src/css/shes-got-style.css`

## Where do I put my images?

You can pop them in `src/assets` and import them into the page like and use them like this:

```
---
import { Image } from "astro:assets";

import ImageName from "../assets/the-image.png"
---

<Image src={ImageName} alt="Best image ever" />
```

## How to I preview my site?

Click the play icon while hovering over "dev" in the "NPM SCRIPTS" panel

**or**

Type `pnpm dev` into the terminal (and hit enter)

## Can I test a 'build' of my site so I know it builds without errors?

Click the play icon while hovering over "build" in the "NPM SCRIPTS" panel

**or**

Type `pnpm build` into the terminal (and hit enter)
