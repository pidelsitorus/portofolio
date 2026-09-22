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
            Currently working as an IT Database Support at Indomaret Group,
            supporting database monitoring, backup operations, replication,
            and basic troubleshooting across database environments.
        </p>

        <p>
            Previously, I worked as a Cloud Systems Engineer Intern at
            PT PAN Solusi Indodata, where I worked with Kubernetes,
            GPU virtualization, Python, and REST API development, Linux
            Administration, Docker.
        </p>
    </div>
</section>

<section id="experience">
    <h2>Experience</h2>

    <div class="experience">

        <div class="about">
            <p>
                I am a Computer Technology graduate from Institut Teknologi Del.
                I have experience in cloud systems, infrastructure,
                database support, and system automation.
            </p>
        </div>

        <div class="experience-item">

            <div class="experience-header">
                <div>
                    <h3>IT Database Support</h3>
                    <p class="experience-company">Indomaret Group</p>
                </div>

                <span class="experience-period">Sep 2026 – Present</span>
            </div>

            <p>
                Supporting database operations and monitoring activities
                across database environments.
            </p>

            <ul>
                <li>Monitoring database availability and system status.</li>
                <li>Checking backup status and backup verification.</li>
                <li>Monitoring database replication and replication lag.</li>
                <li>Performing basic troubleshooting on database environments.</li>
                <li>Escalating database issues to the DBA team when required.</li>
            </ul>
        </div>

        <div class="experience-item">
            <div class="experience-header">
                <div>
                    <h3>Cloud Systems Engineer Intern</h3>
                    <p class="experience-company">PT PAN Solusi Indodata</p>
                </div>

                <span class="experience-period">Jan 2025 – Jul 2025</span>
            </div>

            <p>
                Worked on an Edge Cloud Gaming Platform focused on
                low-latency game streaming.
            </p>

            <ul>
                <li>Worked with Kubernetes orchestration.</li>
                <li>Implemented GPU virtualization for game workloads.</li>
                <li>Developed a Flask REST API using Python.</li>
                <li>Automated game server deployment through Kubernetes.</li>
            </ul>
        </div>

    </div>
</section>

</section>

<section id="skills">
    <h2>Skills</h2>

    <div class="skills">

        <div class="skill">
            <h3>Database</h3>

            <div class="skill-tags">
                <span>Oracle</span>
                <span>MySQL</span>
                <span>PostgreSQL</span>
            </div>
        </div>

        <div class="skill">
            <h3>Infrastructure</h3>

            <div class="skill-tags">
                <span>Linux</span>
                <span>Virtual Machine</span>
                <span>System Monitoring</span>
            </div>
        </div>

        <div class="skill">
            <h3>Cloud & DevOps</h3>

            <div class="skill-tags">
                <span>Docker</span>
                <span>Kubernetes</span>
                <span>Git</span>
                <span>GitHub</span>
            </div>
        </div>

        <div class="skill">
            <h3>Programming</h3>

            <div class="skill-tags">
                <span>Python</span>
                <span>PHP</span>
                <span>Laravel</span>
            </div>
        </div>

        <div class="skill">
            <h3>Automation</h3>

            <div class="skill-tags">
                <span>Shell Script</span>
                <span>Windows Batch</span>
                <span>SSH</span>
            </div>
        </div>

    </div>
</section>

<section id="projects">
    <h2>Projects</h2>

    <div class="projects">

        <div class="project">
            <span class="project-category">AUTOMATION</span>

            <h3>Backup Checker Automation</h3>

            <p>
                Automated backup verification for Linux database servers
                using Windows Batch and SSH. The tool checks backup files
                across multiple servers and identifies potential backup
                failures.
            </p>

            <div class="tech-tags">
                <span>Windows Batch</span>
                <span>SSH</span>
                <span>Linux</span>
            </div>
        </div>

        <div class="project">
            <span class="project-category">DEVOPS</span>

            <h3>DevOps Inventory API</h3>

            <p>
                A REST API project built to practice DevOps workflows,
                containerization, and application deployment. The project
                uses FastAPI, PostgreSQL, Docker, and Docker Compose.
            </p>

            <div class="tech-tags">
                <span>Python</span>
                <span>FastAPI</span>
                <span>PostgreSQL</span>
                <span>Docker</span>
            </div>
        </div>

        <div class="project">
            <span class="project-category">CLOUD</span>

            <h3>Edge Gaming Cloud Platform</h3>

            <p>
                Developed during an internship at PT PAN Solusi Indodata.
                The platform focused on low-latency game streaming using
                GPU virtualization and Kubernetes orchestration.
            </p>

            <div class="tech-tags">
                <span>Python</span>
                <span>Flask</span>
                <span>Kubernetes</span>
                <span>Docker</span>
            </div>
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

        <div class="contact-links">
            <a href="mailto:pidelsitorus1309@gmail.com" class="contact-link">
                Email
            </a>

            <a href="https://github.com/pidelsitorus"
               target="_blank"
               rel="noopener noreferrer"
               class="contact-link">
                GitHub
            </a>

            <a href="https://www.linkedin.com/in/pidel-sitorus"
               target="_blank"
               rel="noopener noreferrer"
               class="contact-link">
                LinkedIn
            </a>

            <a href="https://wa.me/6281396294663"
               target="_blank"
               rel="noopener noreferrer"
               class="contact-link">
                WhatsApp
            </a>
        </div>
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
