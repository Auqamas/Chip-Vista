<?php $role = "Senior Inventory Specialist"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Apply - <?= $role ?></title>
  <link rel="icon" href="Logo.svg" media="(prefers-color-scheme: light)">
  <link rel="icon" href="White.svg" media="(prefers-color-scheme: dark)">
  
  <style>
      .font-cabin { font-family: "Cabin", sans-serif; font-optical-sizing: auto; font-style: normal; font-variation-settings: "wdth" 100; }
      @keyframes scroll { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }
  </style>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Anonymous+Pro:ital,wght@0,400;0,700;1,400;1,700&family=Anton&family=Cabin:ital,wght@0,400..700;1,400..700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=League+Spartan:wght@100..900&family=Liter&family=Londrina+Solid:wght@100;300;400;900&family=Megrim&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Roboto:ital,wght@0,100..900;1,100..900&family=Rubik:ital,wght@0,300..900;1,300..900&family=Sulphur+Point:wght@300;400;700&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <script src="https://unpkg.com/preline/dist/preline.js"></script>

</head>
<body>

  <!-- Header Start -->
  <header class="font-cabin flex flex-wrap fixed md:justify-start md:flex-nowrap z-50 w-full backdrop-blur-sm border-b border-gray-300">
      <nav class="relative max-w-[85rem] w-full mx-auto md:flex md:items-center md:justify-between md:gap-3 py-2 px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center">
          <a id="brand" class="flex gap-2 justify-center items-center transition-all duration-500" href="index.html" aria-label="Brand">
            <img id="logo" src="Logo.svg" width="50" alt="logo" class="transition-all duration-500" />
            <h1 id="brand-text" class="font-black text-lg transition-all duration-500 whitespace-nowrap">ChipVista</h1>
          </a>
            
          <!-- Collapse Button -->
          <button type="button" class="hs-collapse-toggle md:hidden relative size-9 flex justify-center items-center font-medium text-sm rounded-lg border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none" id="hs-header-base-collapse"  aria-expanded="false" aria-controls="hs-header-base" aria-label="Toggle navigation"  data-hs-collapse="#hs-header-base" >
            <svg class="hs-collapse-open:hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" x2="21" y1="6" y2="6"/><line x1="3" x2="21" y1="12" y2="12"/><line x1="3" x2="21" y1="18" y2="18"/></svg>
            <svg class="hs-collapse-open:block shrink-0 hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
            <span class="sr-only">Toggle navigation</span>
          </button>
          <!-- End Collapse Button -->
        </div>
    
        <!-- Collapse -->
        <div id="hs-header-base" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block "  aria-labelledby="hs-header-base-collapse" >
          <div class="overflow-hidden overflow-y-auto max-h-[75vh] [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300">
            <div class="py-2 md:py-0  flex flex-col md:flex-row md:items-center gap-0.5 md:gap-1">
              <div class="grow">
                <div class="flex flex-col md:flex-row md:justify-end md:items-center gap-0.5 md:gap-1">
                  <a class="px-4 py-2 flex items-center text-sm text-gray-800 hover:bg-gray-100 rounded-md focus:outline-hidden focus:bg-gray-100 " href="index.html">
                    <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"/><path d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>
                    Home
                  </a>
    
                  <a class="px-4 py-2 flex items-center text-sm text-gray-800 hover:bg-gray-100 rounded-md focus:outline-hidden focus:bg-gray-100" href="service.html" aria-current="page">
                    <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                    Services
                  </a>
    
                  <a class="px-4 py-2 flex items-center text-sm text-gray-800 hover:bg-gray-100 rounded-md focus:outline-hidden focus:bg-gray-100" href="about.html">
                    <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 12h.01"/><path d="M16 6V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/><path d="M22 13a18.15 18.15 0 0 1-20 0"/><rect width="20" height="14" x="2" y="6" rx="2"/></svg>
                    About
                  </a>
    
                  <a class="px-4 py-2 flex items-center text-sm text-gray-800 hover:bg-gray-100 rounded-md focus:outline-hidden focus:bg-gray-100" href="project.html">
                    <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-2 2Zm0 0a2 2 0 0 1-2-2v-9c0-1.1.9-2 2-2h2"/><path d="M18 14h-8"/><path d="M15 18h-5"/><path d="M10 6h8v4h-8V6Z"/></svg>
                    Projects
                  </a>

                  <a class="px-4 py-2 flex items-center text-[14px] bg-gray-100 text-gray-900 hover:bg-blue-200 rounded-md focus:outline-hidden focus:bg-blue-300" href="project.html">
                    <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-2 2Zm0 0a2 2 0 0 1-2-2v-9c0-1.1.9-2 2-2h2"/><path d="M18 14h-8"/><path d="M15 18h-5"/><path d="M10 6h8v4h-8V6Z"/></svg>
                    Career
                  </a>
                </div>
              </div>
    
              <div class="my-2 md:my-0 md:mx-2">
                <div class="w-full h-px md:w-px md:h-4 bg-gray-100 md:bg-gray-300"></div>
              </div>
    
              <!-- Button Group -->
              <div class=" flex flex-wrap items-center gap-x-1.5">
                <a class="py-2 px-4 inline-flex items-center font-medium text-sm rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100" href="contact.html">
                  Contact Us
                </a>
              </div>
              <!-- End Button Group -->
            </div>
          </div>
        </div>
        <!-- End Collapse -->
      </nav>
  </header>
  <!-- Header Ends -->

  <section class="antialiased font-cabin pt-20"> 
    <div class="max-w-7xl mx-auto px-6 py-12 lg:py-16">
      <div class="grid gap-1 lg:gap-1 lg:grid-cols-[370px_minmax(0,1fr)]">
        
        <!-- LEFT SIDEBAR -->
        <aside class="lg:sticky lg:top-20 h-fit">
          <h2 class="text-7xl font-extrabold leading-[0.9] text-slate-900">
            Apply for<br><span class="text-blue-600"><?= $role ?></span>
          </h2>

          <div class="mt-6">
            <p class="text-sm text-slate-500">
              Location: Boston, United States<br>
              Compensation: $100K – $500K<br>
              Full Time
            </p>
            <p class="mt-4 text-xs tracking-wider uppercase text-slate-400">Need help?</p>
            <a href="mailto:careers@chipvista.ai"
              class="mt-1 inline-block text-blue-600 font-semibold underline underline-offset-4 decoration-2 hover:text-orange-700">
              careers@chipvista.ai
            </a>
          </div>
        </aside>

        <!-- RIGHT CONTENT -->
        <div class="bg-white p-8 rounded-xl shadow space-y-6">

          <!-- Role Details Start -->
          <div class="space-y-6">
            <div>
              <h1 class="text-blue-600 text-4xl font-semibold"><?= $role ?></h1>
              <ul class="mb-0">
                <li><span class="font-bold">Experience Required: </span> 4+ years</li>
                <li><span class="font-bold">Location: </span> Lahore, on-site</li>
                <li><span class="font-bold">Job Type: </span> Full-time</li>
                <li><span class="font-bold">Industry: </span> Semiconductor, Design Verification</li>
              </ul>
            </div>

            <div>
              <h1 class="text-blue-600 text-4xl font-semibold">Job Summary:</h1>
              <p class="mt-1 font-light text-gray-700">We are looking for a self-motivated engineer who will be part of our verification team. In this role, you will work closely with the designers and verification team on complex IP design verification. You will be responsible for testplan development and implementation, debugging failure, and responsible for coverage closure.</p>
              <p class="mt-2 font-light text-gray-700">This is an exciting opportunity to work with an experienced and highly motivated team of verification engineers.</p>
            </div>

            <div>
              <h1 class="text-blue-600 text-4xl font-semibold">Key Responsibilities:</h1>
              <ul class="list-disc pl-6 mt-1 space-y-1 mb-0 text-gray-700">
                <li>Developing and executing test plans for complex IPs</li>
                <li>Collaborate with the design and verification teams to ensure comprehensive coverage. </li>
                <li>Utilize advanced verification methodologies to identify and resolve design issues. </li>
                <li>Contribute to the continuous improvement of verification processes and methodologies.</li>
                <li>Participate in code reviews and provide feedback on verification-related aspects.</li>
                <li>Maintain thorough documentation of verification activities and results.</li>
              </ul>
            </div>

            <div>
              <h1 class="text-blue-600 text-4xl font-semibold">Minimum Qualification:</h1>
              <ul class="list-disc pl-6 mt-1 space-y-1 mb-0 text-gray-700">
                <li>Bachelor’s or Master’s degree in Computer Science, Electrical Engineering, or a related field</li>
                <li>4+ years of working experience</li>
              </ul>
            </div>

            <div>
              <h1 class="text-blue-600 text-4xl font-semibold">Mandatory Skills:</h1>
              <ul class="list-disc pl-6 mt-1 space-y-1 mb-0 text-gray-700">
                <li>RISC V assembly language and C language expertise for low level programming</li>
                <li>Hands of experience with RISC V Priv/Unpriv architecture is must</li>
                <li>Good understanding computer architecture concepts</li>
                <li>Experience with hypervisors and virtualization is add plus</li>
                <li>Experience with testplan development and implementation</li>
                <li>Knowledge of Verilog/System Verilog</li>
                <li>Familiarity with industry-standard verification tools</li>
                <li>Ability to work in a fast-paced and collaborative environment</li>
                <li>Strong communication and collaboration abilities</li>
                <li>Excellent problem-solving skills and attention to detail.</li>
              </ul>
            </div>
          </div>
          <!-- Role Details End -->

          <h3 id="formSlide" class="text-4xl font-md text-slate-900 mt-20">Submit Your Application</h3>
          <form action="../apply.php" method="POST" enctype="multipart/form-data" class="space-y-5">
            <input type="hidden" name="role" value="<?= $role ?>">

            <div>
              <label class="block text-gray-700 font-medium">Full Name</label>
              <input type="text" name="name" required class="w-full border rounded-lg p-2 ">
            </div>

            <div>
              <label class="block text-gray-700 font-medium">Email</label>
              <input type="email" name="email" required class="w-full border rounded-lg p-2 focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
              <label class="block text-gray-700 font-medium">Resume (PDF/DOC)</label>
              <input type="file" name="resume" accept=".pdf,.doc,.docx" required class="w-full text-sm text-slate-600">
            </div>

            <button type="submit"
              class="inline-flex items-center gap-2 bg-blue-600 text-white px-6 py-3 rounded-full font-medium shadow hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400">
              Submit Application
              <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M7 17L17 7M7 7h10v10"/>
              </svg>
            </button>

            <a href="/Chip%20Vista/contact.html"
               class="inline-flex items-center gap-2 bg-emerald-500 ml-1 text-white px-6 py-3 rounded-full font-medium shadow hover:bg-emerald-600 focus:outline-none focus:ring-2 focus:ring-emerald-400">
               Learn More!
            </a>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Footer Start-->
  <section class="font-cabin relative bg-gradient-to-r from-blue-500 to-[hsl(175,84%,32%)] py-20 px-4 overflow-hidden">
    
    <!-- Animated Gradient Circle -->
    <div class="absolute bottom-10 right-65 opacity-50 animate-pulse">
      <div class="w-14 h-14 rounded-full border-1 border-white animate-pulse" style="animation-duration:8s"></div>
      <div class="w-34 h-34 rounded-full border-1 border-white animate-pulse" style="animation-duration:8s"></div>
    </div>
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-6 text-white">
      <!-- Left Content -->
      <div class="text-center md:text-left max-w-2xl">
        <div class="flex items-center justify-center md:justify-start mb-3">
          <h1 class="text-3xl font-bold sm:text-3xl md:text-5xl lg:text-5xl">Ready to Start Your Next Project?</h1>
        </div>
        <p class="text-base opacity-90">
          Contact us today to discuss your IoT and embedded systems requirements. Our team of experts is ready to help you build innovative solutions.
        </p>
      </div>
      <!-- Button -->
      <div class="flex justify-center md:justify-end w-full md:w-auto">
        <a href="contact.html" class="z-1 py-3 px-12 inline-flex items-center gap-x-2 text-sm font-medium rounded-sm border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
          Get Started
        </a>
      </div>
    </div>
  </section>
  
  <footer class="bg-gray-800 text-white font-cabin">
    <div class="mt-auto w-full max-w-[85rem] py-15 px-4 sm:px-6 lg:px-8 mx-auto">
      <!-- Grid -->
      <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-4 gap-6 mb-10">
        <div class="col-span-full hidden lg:col-span-1 lg:block">
          <div class="flex gap-2 items-center transition-all duration-500" aria-label="Brand">
            <img id="logo" src="White.svg" width="50" alt="logo" class="transition-all duration-500" />
            <h1 class="text-xl transition-all duration-500 whitespace-nowrap">Chip Vista</h1>
          </div>
          <p class="mt-3 text-xs sm:text-base leading-[1.2] text-gray-300">Innovating the future with cutting-edge IoT and embedded solutions.</p>
          <!-- Social Brands -->
          <div class="space-x-4 mt-5">
            <a class="inline-block text-gray-200 hover:text-blue-400 focus:outline-hidden focus:text-blue-600"  target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/chipvista?igsh=MTRwcmVhbjd5cnEzcA%3D%3D&utm_source=qr">
              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-instagram-icon lucide-instagram"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/></svg>
            </a>
            <a class="inline-block text-gray-200 hover:text-blue-400 focus:outline-hidden focus:text-blue-600"  target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/company/chipvista/">
              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-linkedin-icon lucide-linkedin"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect width="4" height="12" x="2" y="9"/><circle cx="4" cy="4" r="2"/></svg>
            </a>
          </div>
          <!-- End Social Brands -->
        </div>
        <!-- End Col -->
        <div>
          <h4 class="text-lg font-black text-blue-500 uppercase">Product</h4>
          <div class="mt-3 grid space-y-3 text-sm">
            <p><a class="inline-flex text-base gap-x-2 text-gray-200 hover:text-gray-400 focus:outline-hidden focus:text-gray-600">Solutions</a></p>
            <p><a class="inline-flex text-base gap-x-2 text-gray-200 hover:text-gray-400 focus:outline-hidden focus:text-gray-600">Industries Served</a></p>
            <p><a class="inline-flex text-base gap-x-2 text-gray-200 hover:text-gray-400 focus:outline-hidden focus:text-gray-600">Hardware Platforms</a></p>
          </div>
        </div>
        <!-- End Col -->
        <div>
          <h4 class="text-lg font-black text-blue-500 uppercase">Company</h4>
          <div class="mt-3 grid space-y-3 text-sm">
            <p><a class="inline-flex text-base gap-x-2 text-gray-200 hover:text-gray-400 focus:outline-hidden focus:text-gray-600" href="about.html">About us</a></p>
            <p><a class="inline-flex text-base gap-x-2 text-gray-200 hover:text-gray-400 focus:outline-hidden focus:text-gray-600" href="service.html">Careers</a></p>
            <p><a class="inline-flex text-base gap-x-2 text-gray-200 hover:text-gray-400 focus:outline-hidden focus:text-gray-600" href="project.html">Blogs</a></p>
          </div>
        </div>
        <!-- End Col -->
        <div>
          <h4 class="text-lg font-black text-blue-500 uppercase">Support</h4>
          <div class="mt-3 grid space-y-3 text-sm">
            <p><a class="inline-flex text-base gap-x-2 text-gray-200 hover:text-gray-400 focus:outline-hidden focus:text-gray-600" href="contact.html">Contact Support</a></p>
            <p><a class="inline-flex text-base gap-x-2 text-gray-200 hover:text-gray-400 focus:outline-hidden focus:text-gray-600" href="#">FAQs</a></p>
            <p><a class="inline-flex text-base gap-x-2 text-gray-200 hover:text-gray-400 focus:outline-hidden focus:text-gray-600" href="#">Request a Quote</a></p>
          </div>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Grid -->
      <div class="pt-5 mt-5 border-t border-gray-500">
        <div class="sm:flex sm:justify-between sm:items-center">
          <div class="flex flex-wrap items-center gap-3">
            <p class="text-sm text-gray-300">© 2025 ChipVista. All rights reserved.</p>
          </div>
          <div class="flex flex-wrap mt-7 justify-between items-center gap-3">
            <div class="col-span-full sm:hidden">
              <a class="flex gap-1 items-center transition-all duration-500" href="index.html" aria-label="Brand">
                <img id="logo" src="Logo's/Logo.svg" width="50" alt="logo" class="transition-all duration-500" />
                <h1 class="text-xl transition-all duration-500 whitespace-nowrap">Chip Vista</h1>
              </a>
              <p class="mt-2 text-xs sm:text-base leading-[1.2] text-gray-600">Innovating the future with cutting- <br>edge IoT and embedded solutions.</p>
            </div>
          </div>
          <!-- End Col -->
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer End-->
      
</body>
</html>
