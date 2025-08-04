<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ZiZi Portfolio</title>
  <link rel="stylesheet" href="/zizi_root/css/index.css">
  <link rel="icon" href="/zizi_root/img/zizi.logo.png">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
  <!-- هدر استیکی -->
  <div class="header">
  <div class="logo">&lt;/z&gt;</div>
  
  <!-- منوی اصلی -->
  <div class="menu">
    <a href="#">Home</a>
    <a href="#">About</a>
    <a href="#">Services</a>
    <a href="#">Contact</a>
  </div>

  <div class="box">
        <!-- آیکون خورشید و ماه -->
      <!-- <div class="theme-toggle" onclick="toggleTheme()">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-sun-moon">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M9.173 14.83a4 4 0 1 1 5.657 -5.657" />
            <path d="M11.294 12.707l.174 .247a7.5 7.5 0 0 0 8.845 2.492a9 9 0 0 1 -14.671 2.914" />
            <path d="M3 12h1" />
            <path d="M12 3v1" />
            <path d="M5.6 5.6l.7 .7" />
            <path d="M3 21l18 -18" />
        </svg>
      </div> -->
        <!-- دکمه تماس -->
        <button class="contact-btn" id="contactBtn" onclick="callNow()">Call Me !</button>
  </div>

  <!-- منوی همبرگری برای موبایل -->
  <div class="menu-mobile" onclick="toggleMenu()">☰</div>
</div>


  <div class="home">
    <!-- 🎥 ویدیو بکگراند -->
    <video autoplay loop muted playsinline class="video-background">
      <source src="/zizi_root/vid/animation.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>

    <!-- 💬 محتوای سایت -->
    <div class="content">
      <h1>Hi ! Im <span class="name">Zeianb</span></h1>
      <p>Transforming digital experiences with dynamic design, powerful code, and a focus on performance and optimization.</p>
    </div>
  </div>

  <script>
    function callNow() {
  let phoneNumber = "09123456789"; // شماره تلفن خود را وارد کنید
  window.location.href = `tel:${phoneNumber}`;
}

// بررسی اندازه صفحه برای پنهان کردن یا نمایش دکمه تماس
function toggleCallButton() {
  const contactBtn = document.getElementById("contactBtn");

  // اگر عرض صفحه کمتر از 768px باشد، دکمه تماس نمایش داده می‌شود
  if (window.innerWidth <= 768) {
    contactBtn.style.display = "block";
  } else {
    contactBtn.style.display = "none";
  }
}

// هنگام بارگذاری صفحه و تغییر اندازه آن، این تابع را فراخوانی می‌کنیم
window.addEventListener("load", toggleCallButton);
window.addEventListener("resize", toggleCallButton);

  </script>

  <!-- محتوا بعد از Home -->
  <div class="extra-content">
    <div class="About">
      <div class="text">
        <h1>About Me</h1>
        <p>
        I’m Zeynab, a full-stack web developer based in Mashhad. <br>
        I’m passionate about building websites that aren’t just functional, but also meaningful, organized, and visually cohesive. My focus is on blending precise coding with minimalistic, user-centric design, where every detail matters, and both form and function are equally important.

On the backend, I work with PHP and MySQL, while on the frontend, I leverage tools like Tailwind CSS and Alpine.js to create modern, responsive interfaces. Beyond technical skills, I’m also involved in ideation and crafting cohesive digital experiences.

Currently, I’m diving into SEO and search engine optimization — because a great website deserves to be seen.

This portfolio is not just a collection of my work; it’s a glimpse into my professional journey, my design philosophy, and the standard I hold myself and my projects to.
        </p>
      </div>
      
      <div class="person">
        <div class="container">
          <div class="container-inner">
            <img class="circle" />
            <img class="img img3" src="/zizi_root/img/avartar.png" width="10%"/>
          </div>
        </div>
      </div>

    </div>

  </div>


  <script>
    let lastScrollTop = 0;
    const header = document.querySelector('.header');
    window.addEventListener('scroll', function() {
      let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
      
      if (scrollTop > lastScrollTop) {
        // اگر اسکرول به پایین باشد، هدر مخفی شود
        header.classList.add('scrolled');
      } else {
        // اگر اسکرول به بالا باشد، هدر ظاهر شود
        header.classList.remove('scrolled');
      }
      
      // جلوگیری از اسکرول منفی
      lastScrollTop = (scrollTop <= 0) ? 0 : scrollTop;
    });


    // تغییر تم بین روشن و تاریک
function toggleTheme() {
  const body = document.body;
  const themeToggle = document.querySelector('.theme-toggle');

  if (body.classList.contains('dark')) {
    body.classList.remove('dark');
  } else {
    body.classList.add('dark');
  }
}

// باز و بسته کردن منوی همبرگری
function toggleMenu() {
  const menu = document.querySelector('.header .menu');
  menu.classList.toggle('active');
}

  </script>


<section class="slider-section">
  <div class="slider-text">
    <h1>automating<br>reflection</h1>
    <p>cutting-edge reflection station for students and teachers, combining hardware and AI technology.</p>
    <div class="nav">
      <button id="prev">&#8592;</button>
      <button id="next">&#8594;</button>
    </div>
  </div>

  <div class="slider">
    <div class="slides">
      <div class="slide">
        <img src="./1.jpg" alt="Project 1" width="100%" height="50% "/>
        <div class="caption">
          Lorem, ipsum dolor sit amet consectetur  <br>
          adipisicing elit. Ea culpa vel in sapiente omnis rb
          <br>repellendus magni? Beatae natus veritatis molestiae?<br>
           <a href="/project.php">Read More...</a>
        </div>
      </div>
      <div class="slide">
        <img src="./2.jpg" alt="Project 2" width="100%"  height="50% "/>
        <div class="caption">
        Lorem, ipsum dolor sit amet consectetur  <br>
          adipisicing elit. Ea culpa vel in sapiente omnis rb
          <br>repellendus magni? Beatae natus veritatis molestiae?<br>
          <a href="/project.php">Read More...</a>

        </div>
      </div>
      <div class="slide">
        <img src="./3.jpg" alt="Project 3" width="100%"  height="50% "/>
        <div class="caption">
        Lorem, ipsum dolor sit amet consectetur  <br>
          adipisicing elit. Ea culpa vel in sapiente omnis rb
          <br>repellendus magni? Beatae natus veritatis molestiae?<br>
          <a href="/project.php">Read More...</a>
        </div>
      </div>
    </div>
    <div class="dots"></div>
  </div>
</section>

<script>
  const slides = document.querySelectorAll('.slide');
  const slidesContainer = document.querySelector('.slides');
  const dotsContainer = document.querySelector('.dots');
  const prevBtn = document.getElementById('prev');
  const nextBtn = document.getElementById('next');
  let current = 0;

  // ایجاد دات‌ها
  slides.forEach((_, i) => {
    const dot = document.createElement('button');
    dot.addEventListener('click', () => goToSlide(i));
    dotsContainer.appendChild(dot);
  });

  const dots = dotsContainer.querySelectorAll('button');

  function updateSlider() {
    const slideWidth = slides[0].offsetWidth + 16; // فاصله gap بین اسلایدها
    slidesContainer.style.transform = `translateX(-${current * slideWidth}px)`;
    dots.forEach((dot, i) => dot.classList.toggle('active', i === current));
  }

  function goToSlide(i) {
    current = (i + slides.length) % slides.length;
    updateSlider();
  }

  // دکمه قبلی/بعدی
  prevBtn.addEventListener('click', () => goToSlide(current - 1));
  nextBtn.addEventListener('click', () => goToSlide(current + 1));

  // کیبورد
  document.addEventListener('keydown', (e) => {
    if (e.key === 'ArrowRight') goToSlide(current + 1);
    if (e.key === 'ArrowLeft') goToSlide(current - 1);
  });

  // لمس (Swipe)
  let startX = 0;
  let endX = 0;

  slidesContainer.addEventListener('touchstart', (e) => {
    startX = e.touches[0].clientX;
  });

  slidesContainer.addEventListener('touchmove', (e) => {
    endX = e.touches[0].clientX;
  });

  slidesContainer.addEventListener('touchend', () => {
    const deltaX = endX - startX;
    if (Math.abs(deltaX) > 50) {
      if (deltaX > 0) {
        goToSlide(current - 1); // swipe right → previous
      } else {
        goToSlide(current + 1); // swipe left → next
      }
    }
    startX = 0;
    endX = 0;
  });

  window.addEventListener('resize', updateSlider);

  updateSlider();
</script>


<section id="skills" class="skills-section">
  <h2>My Skills</h2>
  <div class="skills-container">
    <div class="skill">
      <h3>HTML</h3>
      <div class="progress-bar"><div class="progress" data-width="100%"></div></div>
    </div>
    <div class="skill">
      <h3>CSS</h3>
      <div class="progress-bar"><div class="progress" data-width="100%"></div></div>
    </div>
    <div class="skill">
      <h3>JavaScript</h3>
      <div class="progress-bar"><div class="progress" data-width="80%"></div></div>
    </div>
    <div class="skill">
      <h3>PHP</h3>
      <div class="progress-bar"><div class="progress" data-width="80%"></div></div>
    </div>
    <div class="skill">
      <h3>MySQL</h3>
      <div class="progress-bar"><div class="progress" data-width="70%"></div></div>
    </div>
    <div class="skill">
      <h3>Git</h3>
      <div class="progress-bar"><div class="progress" data-width="60%"></div></div>
    </div>
  </div>
</section>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const skillsSection = document.querySelector("#skills");
    const progressBars = document.querySelectorAll(".progress");

    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          progressBars.forEach(bar => {
            const targetWidth = bar.getAttribute("data-width");
            bar.style.width = targetWidth; // اعمال انیمیشن
          });
          observer.unobserve(skillsSection); // فقط یک‌بار اجرا بشه
        }
      });
    }, { threshold: 0.4 }); // وقتی حدود 40٪ از سکشن دیده بشه

    observer.observe(skillsSection);
  });
</script>


<div class="contact-wrapper">
    <div class="contact-left">
      <h1>Contact Me</h1>
      <p>I'd love to hear from you! Whether you have a question, a project, or just want to say hi — feel free to reach out using this form.</p>
    </div>
    <div class="contact-right">
      <form class="contact-form">
        <input type="text" placeholder="Your Name" required />
        <input type="email" placeholder="Your Email" required />
        <textarea placeholder="Your Message..." required></textarea>
        <button type="submit">Send Message</button>
      </form>
    </div>
  </div>




<!-- Footer Section -->
<footer class="site-footer">
  <div class="footer-container">
    <div class="footer-brand">
      <h2>YourName</h2>
      <p>Thanks for visiting my portfolio!</p>
    </div>

    <div class="footer-social">
      <a href="#" aria-label="GitHub"><i class="fab fa-github"></i></a>
      <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
      <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
      <a href="#" aria-label="Email"><i class="fas fa-envelope"></i></a>
    </div>
  </div>

  <div class="footer-bottom">
    <p>&copy; 2025 YourName. All rights reserved.</p>
  </div>
</footer>

<!-- FontAwesome for icons -->
<script src="https://kit.fontawesome.com/yourkitid.js" crossorigin="anonymous"></script>

  
</body>
</html>
