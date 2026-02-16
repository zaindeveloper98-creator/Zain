<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ByteCraft Profile</title>
    <link rel="stylesheet" href="components/bootstrap.min.css">
<link rel="icon" type="image/png" href="components\logo.png">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

    <style>
    html {
        scroll-behavior: smooth;
    }

    /* initial hidden state for custom scroll reveal */
    .scroll-reveal {
        opacity: 0;
        transform: translateY(50px);
        transition: all 0.8s ease-out;
    }

    /* visible when scrolled */
    .scroll-reveal.active {
        opacity: 1;
        transform: translateY(0);
    }

    /* optional: staggered reveal */
    .scroll-reveal:nth-child(1) {
        transition-delay: 0.2s;
    }

    .scroll-reveal:nth-child(2) {
        transition-delay: 0.4s;
    }

    .scroll-reveal:nth-child(3) {
        transition-delay: 0.6s;
    }
    </style>
</head>

<body>
    <?php require_once("components/herosec.php"); ?>

    <section id="about_us" class="scroll-reveal" data-aos="fade-up">
        <?php require_once("components/about_us.php"); ?>
    </section>

    <section id="projects" class="scroll-reveal" data-aos="fade-up">
        <?php require_once("components/projects.php"); ?>
    </section>

    <section id="stats" class="scroll-reveal" data-aos="fade-up">
        <?php require_once("components/stat_sec.php"); ?>
    </section>
    
    <section id="stats" class="scroll-reveal" data-aos="fade-up">
        <?php require_once("components/contact_form.php"); ?>
    </section>
    <section id="stats" class="scroll-reveal" data-aos="fade-up">
        <?php require_once("components/footer.php"); ?>
    </section>

    <script src="components/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
    // Initialize AOS
    AOS.init({
        duration: 1000,
        once: true,
        offset: 100
    });

    document.addEventListener("DOMContentLoaded", () => {
        const reveals = document.querySelectorAll(".scroll-reveal");

        const revealOnScroll = () => {
            const windowHeight = window.innerHeight;
            reveals.forEach(el => {
                const elementTop = el.getBoundingClientRect().top;
                if (elementTop < windowHeight - 100) {
                    el.classList.add("active");
                }
            });
        };

        window.addEventListener("scroll", revealOnScroll);
        revealOnScroll();
    });
    </script>
</body>

</html>