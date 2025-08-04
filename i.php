<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Me</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background-color: #0e0e0e;
      color: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      padding: 2rem;
    }

    .contact-wrapper {
      max-width: 900px;
      width: 100%;
      display: flex;
      background-color: #141414;
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 0 30px rgba(177, 77, 255, 0.3);
      flex-wrap: wrap;
    }

    .contact-left, .contact-right {
      flex: 1 1 400px;
      padding: 2.5rem;
    }

    .contact-left {
      background: linear-gradient(135deg, #1b1b1b, #0a0a0a);
      display: flex;
      flex-direction: column;
      justify-content: center;
      color: #b84eff;
    }

    .contact-left h1 {
      font-size: 2.8rem;
      margin-bottom: 1rem;
      text-shadow: 0 0 10px #b84eff;
    }

    .contact-left p {
      font-size: 1.1rem;
      line-height: 1.6;
    }

    .contact-form {
      display: flex;
      flex-direction: column;
      gap: 1rem;
    }

    .contact-form input,
    .contact-form textarea {
      background: transparent;
      border: 2px solid #b84eff;
      padding: 0.8rem 1rem;
      border-radius: 10px;
      color: #fff;
      font-size: 1rem;
      outline: none;
      transition: 0.3s ease;
      width: 100%;
    }

    .contact-form textarea {
      resize: none;
      min-height: 120px;
    }

    .contact-form input:focus,
    .contact-form textarea:focus {
      box-shadow: 0 0 10px #b84eff, 0 0 20px #b84eff inset;
    }

    .contact-form button {
      background: #b84eff;
      color: #0f0f0f;
      border: none;
      padding: 0.8rem;
      font-size: 1rem;
      border-radius: 10px;
      cursor: pointer;
      transition: 0.3s ease;
      font-weight: bold;
    }

    .contact-form button:hover {
      background: #d3a6ff;
      box-shadow: 0 0 10px #b84eff;
    }

    @media (max-width: 768px) {
      body {
        padding: 1rem;
        align-items: flex-start;
      }

      .contact-wrapper {
        flex-direction: column;
        margin: 0;
        border-radius: 12px;
      }

      .contact-left, .contact-right {
        padding: 1.5rem;
      }

      .contact-left h1 {
        font-size: 2rem;
      }
    }

    @media (max-width: 400px) {
      .contact-form button {
        font-size: 0.9rem;
        padding: 0.7rem;
      }

      .contact-left h1 {
        font-size: 1.6rem;
      }

      .contact-left p {
        font-size: 0.95rem;
      }
    }
  </style>
</head>
<body>

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

</body>
</html>
