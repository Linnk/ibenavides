<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Linnk</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:300" rel="stylesheet">
        <style media="screen">
            body, html {
                margin: 0;
                padding: 0;
            }
            body {
                background: #121020;
                color: #fff;
                font-family: "Roboto Mono";
                font-weight: 300;
                font-size: 10pt;
            }
            a {
                color: #aaa;
                text-decoration: none;
                border-bottom: 1px dashed #777;
            }
            a:hover {
                color: #ccc;
                border-bottom: 1px dashed #fff;
            }
            main {
                min-width: 700px;
                max-width: 1000px;
                margin: 0 auto 2em auto;
                padding: 0 5em;
            }
            #bio {
                margin: 10em 0 4em 0;
            }
            #bio h1 {
                text-align: left;
                margin: 0 0 2em 0;
                font-weight: 300;
            }
            #bio em {
                border-bottom: 1px dashed #fff;
                font-style: normal;
            }
            #experience > article {
                display: flex;
                flex-direction: row;
                padding: 1em 0;
                height: 4em;
            }
            #experience > article > .company {
                width: 33%;
            }
            #experience > article > .date {
                width: 22%;
                text-align: left;
                color: #777;
            }
            #experience > article > .description {
                width: 45%;
                color: #aaa;
            }
            #experience > article > .description > em {
                font-style: normal;
            }
            #experience > article:hover > .description > em {
                color: #fff;
            }
            footer {
                position: absolute;
                bottom: 0;
                height: 2em;
                width: 100%;
                padding: 1em 0;
                text-align: right;
            }
            footer > a {
                margin-right: 2em;
            }
        </style>
    </head>
    <body>
        <main>
            <section id="bio">
                <article>
                    <header>
                		<h1>Hello</h1>
                	</header>
                    <p>I'm Ignacio Benavides, a Software Engineer from Guadalajara, México.</p>
                    <p>Currently working at <a target="_blank" href="https://incrementacrm.com/">Incrementa</a> as CTO / <span title="I hate the term serial-entreperneur, but I think I'm one of those.">Cofounder</span> doing software development, product design and project management.</p>
                    <p>I love coding using Node.js, Swift and CakePHP, mostly.</p>
                </article>
            </section>

            <section id="experience">
                <article>
                    <div class="company"><a target="_blank" href="https://incrementacrm.com/">Incrementa</a></div>
                    <div class="date">2013 - Currently</div>
                    <div class="description"><em>Cofounder</em> and <em>CTO</em> at the best CRM solution for Latin America businesses.</div>
                </article>
                <article>
                    <div class="company"><a target="_blank" href="https://spumer.com">Spumer</a></div>
                    <div class="date">2014 - Currently</div>
                    <div class="description"><em>Cofounder</em> and <em>CTO</em> for a web chat for businesses.</div>
                </article>
                <article>
                    <div class="company"><a target="_blank" href="http://buskeeper.com">Buskeeper</a></div>
                    <div class="date">2013 - Currently</div>
                    <div class="description"><em>Cofounder</em> and <em>mobile developer</em> at my side non-profit project.</div>
                </article>
                <article>
                    <div class="company"><a target="_blank" href="https://wem.mx">WEM Creative Studio</a></div>
                    <div class="date">2009 - 2012</div>
                    <div class="description"><em>Cofounder</em> and <em>web / mobile developer</em> at a Digital Studio. We made the first iPad App for México.</div>
                </article>
                <article>
                    <div class="company">Freelance</div>
                    <div class="date">2008 - 2009</div>
                    <div class="description">Development, DevOps and security consultant. <em>I met my Incrementa cofounder in one of these jobs</em>.</div>
                </article>
                <article>
                    <div class="company"><a target="_blank" href="https://www.eskalon.com">Web developer at Eskalon</a></div>
                    <div class="date">2006 - 2008</div>
                    <div class="description"><em title=":D">My first «programming job»</em> as web developer for a local Web Development Agency.</div>
                </article>
            </section>
        </main>
		<footer class="post">
            <a target="_blank" href="https://twitter.com/Linnk">Twitter</a>
            <a target="_blank" href="https://github.com/linnk">Github</a>
		</footer>
    </body>
</html>
