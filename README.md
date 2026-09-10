# Aaron Perkel

Network technician at **UVM Enterprise Technology Services**. B.S. Computer Science from UVM, finished in three years. Burlington, Vermont.

My site answers differently if you ask it from a terminal:

```console
$ curl aaronperkel.com

▄▀█ ▄▀█ █▀█ █▀█ █▄ █   █▀█ █▀▀ █▀█ █▄▀ █▀▀ █
█▀█ █▀█ █▀▄ █▄█ █ ▀█   █▀▀ ██▄ █▀▄ █ █ ██▄ █▄▄

I'm a network technician at the University of Vermont with a
B.S. in Computer Science. I like building small, reliable
systems: networks, web apps, and the occasional Raspberry Pi
project.

$ curl aaronperkel.com/links     # links + projects
$ curl aaronperkel.com/json      # the above, as JSON
$ curl -OJ aaronperkel.com/vcard # contact card (.vcf)
```

## Things I've built

Nearly all of it starts the same way: something in my week is annoying, and it's a Saturday.

**[Íocón Graphics](https://github.com/aaronperkel/iocon)** — a storefront for a custom Irish dance graphics studio: gallery, a multi-step order flow per product, waitlist. Real business, real orders, so the uptime matters more than it does on my other stuff. *Next.js · TypeScript · Tailwind · TiDB* · [iocongraphics.com](https://iocongraphics.com)

**[Peach Cob](https://github.com/aaronperkel/peach-cob)** — house ledger for four roommates. Each utility sits on one person's account; when she posts the bill, the other three owe her a quarter, and the site keeps score until everyone's square. Six-digit email sign-in, reminder emails, calendar feed. *Next.js · MySQL · nodemailer*

**[77 N Union Utilities](https://github.com/aaronperkel/utilities)** — the same problem at my own apartment, plus year-over-year gas and electric charts. Now a Next.js rewrite; the original PHP is still in history at the `php-final` tag. *Next.js · MySQL · Chart.js*

**[Vermont Plate Log](https://github.com/aaronperkel/vermont-plate-log)** — two of us logging every standard `ABC 123` Vermont plate we spot around Burlington. Vermont has never issued `I`, `J`, `O` or `Q`, and only woke `U`, `V` and `Z` up in late 2023, so the app carries two alphabets and a note explaining why. *Next.js · Drizzle · Turso*

**[Mileage](https://github.com/aaronperkel/mileage-tracker-app)** — one number field. Tap it getting out of the car, tap it getting back in. At the end of the month, three buttons put the columns on the clipboard in the order the UVM workbook wants them. It doesn't generate the spreadsheet; it removes the remembering. *Next.js · Drizzle · Turso*

**[Funko](https://github.com/aaronperkel/funko)** — collection and wishlist tracker, because a spreadsheet kept losing the argument. *Next.js · Drizzle · Turso*

**[Room Status Sign](https://github.com/aaronperkel/Room-Display-Sign)** — a Waveshare e-paper panel mounted on my door, driven by Flask on a Pi. Three lines and today's date, updated from any browser on the network. "Do not disturb until 4." *Python · Flask · Raspberry Pi*

**[UVM Sublets](https://github.com/aaronperkel/sublet)** — sublet listings near campus: post one behind a NetID, browse the rest on a Leaflet map filtered by price, semester and distance from campus. *PHP · MySQL · Leaflet* · [demo](https://sublet.aperkel.w3.uvm.edu/demo/)

<details>
<summary>Older things I'm still fond of</summary>

<br>

- **[Blob Kart](https://github.com/owncook/Blob-Kart)** — a two-player kart racer in C++ and OpenGL, written from scratch for an advanced programming class.
- **[Lights Out](https://github.com/aaronperkel/Lights-Out)** — the puzzle where every click flips a cell and its neighbors. Deceptively simple; still C++.
- **[Message/Doodle Board](https://github.com/aaronperkel/message-doodle-board)** — a birthday guestbook where people could draw on a canvas.
- **[CRN Auto Typer](https://github.com/aaronperkel/crn-auto-typer)** — pyautogui hammering course registration numbers into the registrar's form at 7:00:00 AM. Worked exactly as well as it sounds like it did.
- **[Avoid the Asteroids](https://github.com/aaronperkel/avoid-the-asteroids)** — an old Python game from a UVM class, kept for sentimental reasons.

</details>

## What I actually reach for

Day to day it's **TypeScript** and **Next.js** on Vercel with **Tailwind**, over either Drizzle/Turso or `mysql2`/TiDB depending on when I started the project. Before that it was **PHP** and **MySQL**, and plenty of that is still happily running. At work it's Linux, networking gear, and whatever shell script stops something from being done by hand. **Python** and a Raspberry Pi when a thing needs to exist physically. **C++**, **Java** and **Swift** when I miss them.

I've also been fascinated by aviation for as long as I can remember — VATSIM, flight sim, far too much reading about aircraft — and I keep looking for excuses to point the software half at it.

## Elsewhere

[aaronperkel.com](https://aaronperkel.com) · [resume](https://aaronperkel.com/resume) · [linkedin](https://linkedin.com/in/aaronperkel) · [youtube](https://youtube.com/@aaronperkel) · [me@aaronperkel.com](mailto:me@aaronperkel.com)
