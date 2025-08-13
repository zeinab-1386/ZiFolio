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
            
            <a href="">
              <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.0744 2.9938C4.13263 1.96371 4.37869 1.51577 5.08432 1.15606C5.84357 0.768899 7.04106 0.949072 8.45014 1.66261C9.05706 1.97009 9.11886 1.97635 10.1825 1.83998C11.5963 1.65865 13.4164 1.65929 14.7213 1.84164C15.7081 1.97954 15.7729 1.97265 16.3813 1.66453C18.3814 0.651679 19.9605 0.71795 20.5323 1.8387C20.8177 2.39812 20.8707 3.84971 20.6494 5.04695C20.5267 5.71069 20.5397 5.79356 20.8353 6.22912C22.915 9.29385 21.4165 14.2616 17.8528 16.1155C17.5801 16.2574 17.3503 16.3452 17.163 16.4167C16.5879 16.6363 16.4133 16.703 16.6247 17.7138C16.7265 18.2 16.8491 19.4088 16.8973 20.4002C16.9844 22.1922 16.9831 22.2047 16.6688 22.5703C16.241 23.0676 15.6244 23.076 15.2066 22.5902C14.9341 22.2734 14.9075 22.1238 14.9075 20.9015C14.9075 19.0952 14.7095 17.8946 14.2417 16.8658C13.6854 15.6415 14.0978 15.185 15.37 14.9114C17.1383 14.531 18.5194 13.4397 19.2892 11.8146C20.0211 10.2698 20.1314 8.13501 18.8082 6.83668C18.4319 6.3895 18.4057 5.98446 18.6744 4.76309C18.7748 4.3066 18.859 3.71768 18.8615 3.45425C18.8653 3.03823 18.8274 2.97541 18.5719 2.97541C18.4102 2.97541 17.7924 3.21062 17.1992 3.49805L16.2524 3.95695C16.1663 3.99866 16.07 4.0147 15.975 4.0038C13.5675 3.72746 11.2799 3.72319 8.86062 4.00488C8.76526 4.01598 8.66853 3.99994 8.58215 3.95802L7.63585 3.49882C7.04259 3.21087 6.42482 2.97541 6.26317 2.97541C5.88941 2.97541 5.88379 3.25135 6.22447 4.89078C6.43258 5.89203 6.57262 6.11513 5.97101 6.91572C5.06925 8.11576 4.844 9.60592 5.32757 11.1716C5.93704 13.1446 7.4295 14.4775 9.52773 14.9222C10.7926 15.1903 11.1232 15.5401 10.6402 16.9905C10.26 18.1319 10.0196 18.4261 9.46707 18.4261C8.72365 18.4261 8.25796 17.7821 8.51424 17.1082C8.62712 16.8112 8.59354 16.7795 7.89711 16.5255C5.77117 15.7504 4.14514 14.0131 3.40172 11.7223C2.82711 9.95184 3.07994 7.64739 4.00175 6.25453C4.31561 5.78028 4.32047 5.74006 4.174 4.83217C4.09113 4.31822 4.04631 3.49103 4.0744 2.9938Z"/>
                <path d="M3.33203 15.9454C3.02568 15.4859 2.40481 15.3617 1.94528 15.6681C1.48576 15.9744 1.36158 16.5953 1.66793 17.0548C1.8941 17.3941 2.16467 17.6728 2.39444 17.9025C2.4368 17.9449 2.47796 17.9858 2.51815 18.0257C2.71062 18.2169 2.88056 18.3857 3.05124 18.5861C3.42875 19.0292 3.80536 19.626 4.0194 20.6962C4.11474 21.1729 4.45739 21.4297 4.64725 21.5419C4.85315 21.6635 5.07812 21.7352 5.26325 21.7819C5.64196 21.8774 6.10169 21.927 6.53799 21.9559C7.01695 21.9877 7.53592 21.998 7.99999 22.0008C8.00033 22.5527 8.44791 23.0001 8.99998 23.0001C9.55227 23.0001 9.99998 22.5524 9.99998 22.0001V21.0001C9.99998 20.4478 9.55227 20.0001 8.99998 20.0001C8.90571 20.0001 8.80372 20.0004 8.69569 20.0008C8.10883 20.0026 7.34388 20.0049 6.67018 19.9603C6.34531 19.9388 6.07825 19.9083 5.88241 19.871C5.58083 18.6871 5.09362 17.8994 4.57373 17.2891C4.34391 17.0194 4.10593 16.7834 3.91236 16.5914C3.87612 16.5555 3.84144 16.5211 3.80865 16.4883C3.5853 16.265 3.4392 16.1062 3.33203 15.9454Z"/>
              </svg>
            </a>

            <a href="">
              <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M23.1117 4.49449C23.4296 2.94472 21.9074 1.65683 20.4317 2.227L2.3425 9.21601C0.694517 9.85273 0.621087 12.1572 2.22518 12.8975L6.1645 14.7157L8.03849 21.2746C8.13583 21.6153 8.40618 21.8791 8.74917 21.968C9.09216 22.0568 9.45658 21.9576 9.70712 21.707L12.5938 18.8203L16.6375 21.8531C17.8113 22.7334 19.5019 22.0922 19.7967 20.6549L23.1117 4.49449ZM3.0633 11.0816L21.1525 4.0926L17.8375 20.2531L13.1 16.6999C12.7019 16.4013 12.1448 16.4409 11.7929 16.7928L10.5565 18.0292L10.928 15.9861L18.2071 8.70703C18.5614 8.35278 18.5988 7.79106 18.2947 7.39293C17.9906 6.99479 17.4389 6.88312 17.0039 7.13168L6.95124 12.876L3.0633 11.0816ZM8.17695 14.4791L8.78333 16.6015L9.01614 15.321C9.05253 15.1209 9.14908 14.9366 9.29291 14.7928L11.5128 12.573L8.17695 14.4791Z"/>
              </svg>
            </a>

            <a href="">
              <svg class="last" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" >
                <path  d="M3 11C3 7.22876 3 5.34315 4.17157 4.17157C5.34315 3 7.22876 3 11 3H13C16.7712 3 18.6569 3 19.8284 4.17157C21 5.34315 21 7.22876 21 11V13C21 16.7712 21 18.6569 19.8284 19.8284C18.6569 21 16.7712 21 13 21H11C7.22876 21 5.34315 21 4.17157 19.8284C3 18.6569 3 16.7712 3 13V11Z" stroke-width="2"/>
                <circle cx="16.5" cy="7.5" r="1.5"/>
                <circle cx="12" cy="12" r="3" stroke-width="2"/>
              </svg>
            </a>
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
