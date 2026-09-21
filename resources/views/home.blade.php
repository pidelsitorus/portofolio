<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pidel Sitorus | Portfolio</title>


    <link rel="stylesheet" href="/css/style.css">

</head>

<body>

<nav>
    <div class="logo">Pidel Sitorus</div>

    <button class="menu-toggle" id="menu-toggle" aria-label="Toggle navigation">
        ☰
    </button>

    <ul id="nav-menu">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#experience">Experience</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#projects">Projects</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>
</nav>


<section class="hero" id="home">
    <div class="hero-content">

        <p class="hero-label">IT DBA SUPPORT • CLOUD • DEVOPS ENGINEER</p>

        <h1>Pidel Sitorus</h1>

        <h2>IT Database Support</h2>

        <p class="hero-description">
            Computer Technology graduate focused on database systems,
            cloud infrastructure, system automation, and DevOps.
        </p>

        <div class="hero-buttons">
            <a href="#projects" class="button">
                View Projects
            </a>

            <a href="#contact" class="button button-secondary">
                Contact Me
            </a>
        </div>

    </div>
</section>

<section id="about">
    <h2>About Me</h2>

    <div class="about">
        <p>
            I am a Computer Technology graduate from Institut Teknologi Del
            with an interest in IT infrastructure, database systems,
            cloud infrastructure, and system automation.
        </p>

        <p>
            Currently working as an IT Support Database at Indomaret Group,
            supporting database monitoring, backup operations, replication,
            and basic troubleshooting across database environments.
        </p>

        <p>
            Previously, I worked as a Cloud Systems Engineer Intern at
            PT PAN Solusi Indodata, where I worked with Kubernetes,
            GPU virtualization, Python, and REST API development.
        </p>
    </div>
</section>

<section id="experience">
    <h2>Experience</h2>

    <div class="projects">

        <div class="project">
            <h3>IT Support Database</h3>
            <p><strong>Indomaret Group</strong></p>
            <p>
                Supporting database operations and monitoring activities,
                including database availability, backup monitoring,
                replication monitoring, and basic troubleshooting.
            </p>
        </div>

        <div class="project">
            <h3>Cloud Systems Engineer Intern</h3>
            <p><strong>PT PAN Solusi Indodata</strong></p>
            <p>
                Worked on an Edge Cloud Gaming Platform using GPU
                virtualization and Kubernetes orchestration. Developed
                a Flask REST API to automate game server deployment
                and integrated it with Kubernetes.
            </p>
        </div>

    </div>
</section>

    <div class="about">
        <p>
            I am a Computer Technology graduate from Institut Teknologi Del.
            I have experience in cloud systems, infrastructure,
            database support, and system automation.
        </p>
    </div>
</section>

<section id="skills">
    <h2>Skills</h2>

    <div class="skills">

        <div class="skill">
            <strong>Database</strong>
            <p>Oracle, MySQL, PostgreSQL</p>
        </div>

        <div class="skill">
            <strong>Infrastructure</strong>
            <p>Linux, Virtual Machine, System Monitoring</p>
        </div>

        <div class="skill">
            <strong>Cloud & DevOps</strong>
            <p>Docker, Kubernetes, Git, GitHub</p>
        </div>

        <div class="skill">
            <strong>Programming</strong>
            <p>Python, PHP, Laravel</p>
        </div>

        <div class="skill">
            <strong>Automation</strong>
            <p>Shell Script, Windows Batch, SSH</p>
        </div>

    </div>
</section>

<section id="projects">
    <h2>Projects</h2>

    <div class="projects">

        <div class="project">
            <h3>Backup Checker Automation</h3>

            <p>
                Automated backup verification for Linux database servers
                using Windows Batch and SSH. The tool checks backup files
                across multiple servers and identifies potential backup
                failures.
            </p>

            <p><strong>Technologies:</strong> Windows Batch, SSH, Linux</p>
        </div>

        <div class="project">
            <h3>DevOps Inventory API</h3>

            <p>
                A REST API project built to practice DevOps workflows,
                containerization, and application deployment. The project
                uses FastAPI, PostgreSQL, Docker, and Docker Compose.
            </p>

            <p><strong>Technologies:</strong> Python, FastAPI, PostgreSQL, Docker</p>
        </div>

        <div class="project">
            <h3>Edge Cloud Gaming Platform</h3>

            <p>
                Developed during an internship at PT PAN Solusi Indodata.
                The platform focused on low-latency game streaming using
                GPU virtualization and Kubernetes orchestration.
            </p>

            <p><strong>Technologies:</strong> Python, Flask, Kubernetes, Docker</p>
        </div>

    </div>
</section>

<section id="contact">
    <h2>Contact</h2>

    <div class="contact">
        <p>
            Interested in working together or discussing a project?
            Feel free to reach out.
        </p>

        <a href="mailto:pidelsitorus1309@gmail.com" class="button">
            Email Me
        </a>
    </div>
</section>

<footer>
    <p>© 2026 Pidel Sitorus. All rights reserved.</p>
</footer>

<script>
    const menuToggle = document.getElementById('menu-toggle');
    const navMenu = document.getElementById('nav-menu');

    menuToggle.addEventListener('click', () => {
        navMenu.classList.toggle('active');

        if (navMenu.classList.contains('active')) {
            menuToggle.textContent = '✕';
        } else {
            menuToggle.textContent = '☰';
        }
    });

    document.querySelectorAll('#nav-menu a').forEach(link => {
        link.addEventListener('click', () => {
            navMenu.classList.remove('active');
            menuToggle.textContent = '☰';
        });
    });
</script>

</body>
</html>
