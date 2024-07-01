

    
    @include('ar.parts.nav')


<!-- Sections -->
<div class="content mt-16 relative h-[calc(100vh-4rem)]">
    <section id="hero-en" class="section active">
        @include('en.sections.hero')
    </section>
    <section id="services-en" class="section">
        @include('en.sections.services')
    </section>
    <section id="team-en" class="section">
        @include('en.sections.team')
    </section>
    <section id="contact-en" class="section">
        @include('en.sections.contact')
    </section>

    <!-- Arabic Sections -->
    <section id="hero-ar" class="section">
        @include('ar.sections.hero')
    </section>
    <section id="services-ar" class="section">
        @include('ar.sections.services')
    </section>
    <section id="team-ar" class="section">
        @include('ar.sections.team')
    </section>
    <section id="contact-ar" class="section">
        @include('ar.sections.contact')
    </section>
</div>

<script>
   document.addEventListener('DOMContentLoaded', function () {
        const links = document.querySelectorAll('.menu-link');
        const sections = document.querySelectorAll('.section');
        const languageSwitcher = document.getElementById('languageSwitcher');  // Updated to match the select element ID

        // Function to show the target section
        function showSection(id) {
            sections.forEach(section => {
                section.classList.remove('active');
            });
            const targetSection = document.getElementById(id);
            if (targetSection) {
                targetSection.classList.add('active');
            }
        }

        // Handle menu link clicks
        links.forEach(link => {
            link.addEventListener('click', function (e) {
                e.preventDefault();  // Prevent default anchor behavior
                const targetId = link.getAttribute('href').substring(1); // Remove the '#' from the href
                const language = document.documentElement.lang;  // Get the current language
                showSection(`${targetId}-${language}`);
            });
        });

        // Initialize by showing the first section based on language
        showSection(`hero-${document.documentElement.lang}`);

        // Handle language switch changes
        languageSwitcher.addEventListener('change', function () {
            const selectedLanguage = this.value;  // Get the selected language (assuming it's 'en' or 'ar')
            document.documentElement.lang = selectedLanguage;
            // Show the corresponding section for the selected language
            showSection(`hero-${selectedLanguage}`);
        });
    });
</script>
   
