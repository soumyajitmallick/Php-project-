<?php include('inc/header.php'); ?>

<style type="text/css">
  .custom-sidebar {
    width: 250px;
    background-color: #d7e3ff;
    padding: 20px;
    min-height: calc(100vh - 160px);
    overflow-y: auto;
    clip-path: ellipse(100% 70% at 0% 20%);
    -webkit-clip-path: ellipse(100% 80% at 0% 20%);
    transition: all 0.3s ease;
    position: relative;
    box-sizing: border-box;
  }


  .custom-sidebar.closed {
    width: 40px;
    clip-path: none;
    overflow: hidden;
  }

  #sidebar-toggle {
    position: absolute;
    top: 190px;
    left: 10px;
    background-color: transparent;
    border: none;
    cursor: pointer;
  }

  #sidebar-toggle .icon-bar {
    display: block;
    width: 25px;
    height: 3px;
    margin: 4px 0;
    background-color: #333;
  }

  .custom-title {
    font-size: 20px;
    margin-bottom: 10px;
    color: #0a76db;
  }

  .custom-list {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .custom-item {
    position: relative;
    padding: 10px;
    margin-bottom: 5px;
    cursor: pointer;
    overflow: hidden;
    color: inherit;
    transition: color 0.3s ease;
  }

  .custom-slide-bg {
    position: absolute;
    top: 0;
    left: -100%;
    height: 100%;
    width: 100%;
    background-color: #bcc3fc;
    border-right: 5px solid #4700df;
    transition: all 0.35s ease;
    z-index: 0;
  }

  .custom-label {
    position: relative;
    z-index: 1;
    text-decoration: none;
    color: inherit;
    display: block;
    white-space: nowrap;
  }

  @media (max-width: 768px) {
    .custom-sidebar {
      position: relative;
      top: 80px;
      left: -250px;
      height: calc(100vh - 80px);
      width: 250px;
      clip-path: ellipse(100% 70% at 0% 20%);
    }

    .custom-sidebar.open {
      left: 0;
    }

    .custom-sidebar.closed {
      left: -210px;
      width: 40px;
      clip-path: none;
    }

    .main-content {
      margin-left: 0 !important;
    }

    .main-content.shift {
      margin-left: 250px !important;
    }
  }

  @media (min-width: 769px) {
    .main-content {
      margin-left: 250px;
      transition: margin-left 0.3s ease;
    }

    .main-content.shifted {
      margin-left: 40px;
    }
  }



</style>

<div style="display: flex;">
  <!-- Sidebar Toggle -->
  <button class="sidebar-toggle" id="sidebar-toggle" aria-label="Toggle Sidebar">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>

  <!-- Sidebar -->
  <div class="custom-sidebar" id="sidebar">
    <h2 class="custom-title">Python Tutorial</h2>
    <ul class="custom-list">
      <a href="python.php" style="text-decoration: none;">
        <li class="custom-item" onclick="highlightItem(this)" onmouseover="hoverEffect(this)" onmouseout="removeHover(this)">
          <div class="custom-slide-bg"></div>
          <span class="custom-label"> Intro</span>
        </li>
      </a>
      <a href="Python1.php" style="text-decoration: none;">
        <li class="custom-item" onclick="highlightItem(this)" onmouseover="hoverEffect(this)" onmouseout="removeHover(this)">
          <div class="custom-slide-bg"></div>
          <span class="custom-label">Part 1</span>
        </li>
      </a>
      <a href="Python2.php" style="text-decoration: none;">
        <li class="custom-item" onclick="highlightItem(this)" onmouseover="hoverEffect(this)" onmouseout="removeHover(this)">
          <div class="custom-slide-bg"></div>
          <span class="custom-label">Part 2</span>
        </li>
      </a>
      <a href="Python3.php" style="text-decoration: none;">
        <li class="custom-item" onclick="highlightItem(this)" onmouseover="hoverEffect(this)" onmouseout="removeHover(this)">
          <div class="custom-slide-bg"></div>
          <span class="custom-label">Part 3</span>
        </li>
      </a>
      <a href="PythonConclusion.php" style="text-decoration: none;">
        <li class="custom-item" onclick="highlightItem(this)" onmouseover="hoverEffect(this)" onmouseout="removeHover(this)">
          <div class="custom-slide-bg"></div>
          <span class="custom-label">Conclusion</span>
        </li>
      </a>
    </ul>
  </div>

  <!-- Main Content -->
  <div style="flex-grow: 1; padding: 20px;">
    <h3 style="font-size: 20px;"> Python – Introduction</h3>
    <h5>Welcome to the Python Crash Course at CodeMonk — your free, beginner-friendly guide to mastering Python step by step.</h5>

    <!-- ✅ Video Section -->
    <div style="width: 100%; max-width: 600px; margin-bottom: 20px; border: 2px solid #ccc; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
      <iframe style="width: 100%; height: 300px; border: none; display: block;" src="Video/py.mp4" allowfullscreen></iframe>
    </div>

  

    <div style="padding: 20px; margin-top: 20px;">
      <!-- <h2>Learn Python</h2> -->
      <h5>Python basics like variables, data types, and loops</h5>
      <h5>How to write clean and logical code</h5>
     <h5> Key concepts like Functions and Object-Oriented Programming (OOP)</h5>


  

      <a href="code.php" style="text-decoration: none; color: white;">
      <button style="background-color: #6f79ff; color: white; padding: 10px 15px; border: none;  border-radius: 5px; ">
        Code Play »
      </button></a>
      <a href="Python1.php" style="text-decoration: none; color: white;">
      <button style="background-color: #6f79ff; color: white; padding: 10px 15px; border: none;  border-radius: 5px; margin-left: 90px;">
       Next »
      </button></a>
    
    </div>

  
  </div>
</div>

<script>
  const toggleBtn = document.getElementById('menu-toggle');
  const navbar = document.getElementById('navbar');

  if (toggleBtn) {
    toggleBtn.addEventListener('click', () => {
      navbar.classList.toggle('active');
    });
  }

  const PtoggleBtn = document.getElementById('sidebar-toggle');
  const Psidebar = document.getElementById('sidebar');

  PtoggleBtn.addEventListener('click', () => {
    sidebar.classList.toggle('active');
  });

  document.addEventListener("DOMContentLoaded", function () {
    const sidebar = document.getElementById("sidebar");
    const toggleBtn = document.getElementById("sidebar-toggle");
    const content = document.querySelector(".main-content");

    function isMobile() {
      return window.innerWidth <= 768;
    }

    function setSidebarState() {
      if (isMobile()) {
        sidebar.classList.remove("open");
        sidebar.classList.add("closed");
        content?.classList.remove("shift");
      } else {
        sidebar.classList.remove("closed");
        sidebar.classList.add("open");
        content?.classList.remove("shift");
      }
    }

    toggleBtn.addEventListener("click", function () {
      if (isMobile()) {
        sidebar.classList.toggle("open");
        sidebar.classList.toggle("closed");
        content?.classList.toggle("shift");
      } else {
        sidebar.classList.toggle("closed");
        sidebar.classList.toggle("open");
        content?.classList.toggle("shifted");
      }
    });

    setSidebarState();
    window.addEventListener("resize", setSidebarState);
  });

  function hoverEffect(element) {
    const bg = element.querySelector('.custom-slide-bg');
    bg.style.left = '0';
    const text = element.querySelector('.custom-link, .custom-label');
    text.style.color = '#fff';
  }

  function removeHover(element) {
    if (!element.classList.contains('selected')) {
      const bg = element.querySelector('.custom-slide-bg');
      bg.style.left = '-100%';
      const text = element.querySelector('.custom-link, .custom-label');
      text.style.color = '';
    }
  }

  function highlightItem(element) {
    const allItems = document.querySelectorAll('.custom-item');
    allItems.forEach(item => {
      item.classList.remove('selected');
      item.querySelector('.custom-slide-bg').style.left = '-100%';
      const text = item.querySelector('.custom-link, .custom-label');
      text.style.color = '';
    });
    element.classList.add('selected');
    element.querySelector('.custom-slide-bg').style.left = '0';
    const text = element.querySelector('.custom-link, .custom-label');
    text.style.color = '#fff';
  }
</script>

<?php include('inc/footer.php'); ?>
