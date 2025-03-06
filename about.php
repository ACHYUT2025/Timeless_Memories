<?php $pageTitle = "About Us"; ?>
<?php include 'header.php'; ?>

    <section class="py-12  object-cover"  height="1080"  width="1920" style="background-image: url(https://images.unsplash.com/photo-1740905546458-2b0199785aa3?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D); background-size: cover; background-position: center;">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-white" id="aboutTitle">About Us</h1>
                <p class="text-xl text-gray-600 mt-4" id="aboutSubtitle">Learn more about our journey and what drives us</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div>
                    <img alt="Photographer in Nepal" class="w-30px h-25px object-cover rounded-full shadow-lg"  src="https://images.unsplash.com/photo-1516148066593-477d571e507f?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8cGhvdG9ncmFwaGVyJTIwcGhvdG98ZW58MHx8MHx8fDA%3D">
                </div>
                <div class="flex flex-col justify-center">
                    <p class="text-gray-100 mb-4" id="aboutContent1"></p>
                    <p class="text-gray-100 mb-4" id="aboutContent2"></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-12 bg-gray-100" style="background-image: url(https://img.freepik.com/free-photo/hands-with-letters-forming-word-teamwork_1134-314.jpg?semt=ais_hybrid); background-size: cover; background-position: center;">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-white">Meet the Team</h2>
                <p class="text-1xl font-bold text-white">brings moments to life through the lens, capturing timeless memories.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <div class="text-center">
                    <img alt="Rancho" class="w-48 h-48 object-cover rounded-full mx-auto mb-4" src="https://plus.unsplash.com/premium_photo-1683140840845-073fa9638261?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                    <h3 class="text-2xl font-bold text-black">Ankit Kandel</h3>
                    <p class="text-s font-bold text-black">Lead Photographer</p>
                </div>
                <div class="text-center">
                    <img alt="Farhan" class="w-48 h-48 object-cover rounded-full mx-auto mb-4" src="https://images.unsplash.com/photo-1611682060613-597ef6d1464b?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OTZ8fHBvdHJhaXR8ZW58MHx8MHx8fDA%3D">
                    <h3 class="text-2xl font-bold text-black">Fathima Kathun</h3>
                    <p class="text-s font-bold text-black">Creative Director</p>
                </div>
                <div class="text-center">
                    <img alt="Raju" class="w-48 h-48 object-cover rounded-full mx-auto mb-4" src="https://images.unsplash.com/photo-1572671846602-1e3a1f4c177f?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTM4fHxwb3RyYWl0fGVufDB8fDB8fHww">
                    <h3 class="text-2xl font-bold text-black">Anjila Gautam</h3>
                    <p class="text-s font-bold text-black">Photo Editor</p>
                </div>
            </div>
        </div>
    </section>

<script>
    // Load about content
    function loadAboutContent() {
        const about = JSON.parse(localStorage.getItem('about')) || {};
        
        // Update main content
        document.getElementById('aboutTitle').textContent = about.title || 'About Us';
        document.getElementById('aboutSubtitle').textContent = about.subtitle || 'Learn more...';
        document.getElementById('aboutContent1').textContent = about.content1 || 'Default content...';
        document.getElementById('aboutContent2').textContent = about.content2 || 'Default content...';
        
        // Update images
        const mainImg = document.querySelector('[alt="Photographer in Nepal"]');
        mainImg.src = `${about.images?.main || mainImg.src}?ts=${Date.now()}`;
        
        // Team images
        if(about.images?.team) {
            about.images.team.forEach((member, index) => {
                const img = document.querySelector(`[alt="${member.name}"]`);
                if(img) img.src = `${member.url}?ts=${Date.now()}`;
            });
        }
    }

    // Listen for updates
    window.addEventListener('storage', (e) => {
        if (e.key === 'aboutUpdate') {
            loadAboutContent();
        }
    });

    // Initial load
    loadAboutContent();
</script>

<?php include 'footer.php'; ?> 