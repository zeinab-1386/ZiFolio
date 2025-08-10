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


          <div class="link">
    <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" viewBox="0 0 640 640">
    <defs>
      <filter id="neontelegram" x="-50%" y="-50%" width="200%" height="200%">
        <feDropShadow dx="0" dy="0" stdDeviation="6" flood-color="#000" />
        <feDropShadow dx="0" dy="0" stdDeviation="12" flood-color="#000" flood-opacity="0.6" />
        <feDropShadow dx="0" dy="0" stdDeviation="24" flood-color="#000" flood-opacity="0.3" />
      </filter>
    </defs>
  
    <!-- دایره زمینه -->
    <circle cx="320" cy="320" r="248" fill=" #810081" />
  
    <!-- آیکون تلگرام با افکت نئونی -->
    <path filter="url(#neon)" fill="#000" d="M435 240.7C431.3 279.9 415.1 375.1 406.9 419C403.4 437.6 396.6 443.8 390 444.4C375.6 445.7 364.7 434.9 350.7 425.7C328.9 411.4 316.5 402.5 295.4 388.5C270.9 372.4 286.8 363.5 300.7 349C304.4 345.2 367.8 287.5 369 282.3C369.2 281.6 369.3 279.2 367.8 277.9C366.3 276.6 364.2 277.1 362.7 277.4C360.5 277.9 325.6 300.9 258.1 346.5C248.2 353.3 239.2 356.6 231.2 356.4C222.3 356.2 205.3 351.4 192.6 347.3C177.1 342.3 164.7 339.6 165.8 331C166.4 326.5 172.5 322 184.2 317.3C256.5 285.8 304.7 265 328.8 255C397.7 226.4 412 221.4 421.3 221.2C423.4 221.2 427.9 221.7 430.9 224.1C432.9 225.8 434.1 228.2 434.4 230.8C434.9 234 435 237.3 434.8 240.6z"/>
  </svg>


  <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" viewBox="0 0 640 640">
    <defs>
      <filter id="neonGithub" x="-50%" y="-50%" width="200%" height="200%">
        <feDropShadow dx="0" dy="0" stdDeviation="6" flood-color="#000" />
        <feDropShadow dx="0" dy="0" stdDeviation="12" flood-color="#000" flood-opacity="0.6" />
        <feDropShadow dx="0" dy="0" stdDeviation="24" flood-color="#000" flood-opacity="0.3" />
      </filter>
    </defs>
  
    <!-- دایره زمینه -->
    <circle cx="320" cy="320" r="248" fill="#000" />
  
    <!-- آیکون گیت‌هاب با افکت نئونی -->
    <path filter="url(#neonGithub)" fill="#810081" d="M237.9 461.4C237.9 463.4 235.6 465 232.7 465C229.4 465.3 227.1 463.7 227.1 461.4C227.1 459.4 229.4 457.8 232.3 457.8C235.3 457.5 237.9 459.1 237.9 461.4zM206.8 456.9C206.1 458.9 208.1 461.2 211.1 461.8C213.7 462.8 216.7 461.8 217.3 459.8C217.9 457.8 216 455.5 213 454.6C210.4 453.9 207.5 454.9 206.8 456.9zM251 455.2C248.1 455.9 246.1 457.8 246.4 460.1C246.7 462.1 249.3 463.4 252.3 462.7C255.2 462 257.2 460.1 256.9 458.1C256.6 456.2 253.9 454.9 251 455.2zM316.8 72C178.1 72 72 177.3 72 316C72 426.9 141.8 521.8 241.5 555.2C254.3 557.5 258.8 549.6 258.8 543.1C258.8 536.9 258.5 502.7 258.5 481.7C258.5 481.7 188.5 496.7 173.8 451.9C173.8 451.9 162.4 422.8 146 415.3C146 415.3 123.1 399.6 147.6 399.9C147.6 399.9 172.5 401.9 186.2 425.7C208.1 464.3 244.8 453.2 259.1 446.6C261.4 430.6 267.9 419.5 275.1 412.9C219.2 406.7 162.8 398.6 162.8 302.4C162.8 274.9 170.4 261.1 186.4 243.5C183.8 237 175.3 210.2 189 175.6C209.9 169.1 258 202.6 258 202.6C278 197 299.5 194.1 320.8 194.1C342.1 194.1 363.6 197 383.6 202.6C383.6 202.6 431.7 169 452.6 175.6C466.3 210.3 457.8 237 455.2 243.5C471.2 261.2 481 275 481 302.4C481 398.9 422.1 406.6 366.2 412.9C375.4 420.8 383.2 435.8 383.2 459.3C383.2 493 382.9 534.7 382.9 542.9C382.9 549.4 387.5 557.3 400.2 555C500.2 521.8 568 426.9 568 316C568 177.3 455.5 72 316.8 72zM169.2 416.9C167.9 417.9 168.2 420.2 169.9 422.1C171.5 423.7 173.8 424.4 175.1 423.1C176.4 422.1 176.1 419.8 174.4 417.9C172.8 416.3 170.5 415.6 169.2 416.9zM158.4 408.8C157.7 410.1 158.7 411.7 160.7 412.7C162.3 413.7 164.3 413.4 165 412C165.7 410.7 164.7 409.1 162.7 408.1C160.7 407.5 159.1 407.8 158.4 408.8zM190.8 444.4C189.2 445.7 189.8 448.7 192.1 450.6C194.4 452.9 197.3 453.2 198.6 451.6C199.9 450.3 199.3 447.3 197.3 445.4C195.1 443.1 192.1 442.8 190.8 444.4zM179.4 429.7C177.8 430.7 177.8 433.3 179.4 435.6C181 437.9 183.7 438.9 185 437.9C186.6 436.6 186.6 434 185 431.7C183.6 429.4 181 428.4 179.4 429.7z"/>
  </svg>
  
  
    </div>
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
