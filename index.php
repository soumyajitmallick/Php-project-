<?php include('inc/header.php'); ?>

 <div class="sect sect--padding-top">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="site">
            <h1 class="site__title">Master Python, AI/ML & Data Science — For Free</h1>
            <h2 class="site__subtitle">Join thousands of learners and kickstart your tech career with high-quality,
              hands-on tutorials and projects.</h2>
            <div class="site__box-link" >
              <a class="btn btn--width" href="#courses" style="text-decoration: none;">Courses</a>
              <a class="btn btn--revert btn--width" href="#contact"style="text-decoration: none;" >Contact</a>
            </div>
            <img class="site__img" src="https://image.ibb.co/c7grYb/image3015.png">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="sect sect--padding-bottom" id="courses">
    <div class="container">
      <div class="row row--center">
        <h1 class="row__title">
          Free Learning Paths
        </h1>
        <h2 class="row__sub">Choose the Right Learning Path for You</h2>
      </div>
      <div class="row row--center row--margin">
        <div class="col-md-4 col-sm-4 price-box price-box--purple">
          <div class="price-box__wrap">
            <div class="price-box__img"></div>
            <h1 class="price-box__title">
              Python
            </h1>
            <p class="price-box__people">
              Beginner Track
            </p>
            <p class="price-box__feat">
              Perfect for those starting from scratch </p>
            <ul class="price-box__list">
              <li class="price-box__list-el">Python Basics</li>
              <li class="price-box__list-el">Data Structures</li>
              <li class="price-box__list-el">Intro to AI</li>
              <li class="price-box__list-el">🆓 Free Forever</li>
            </ul>
            <div class="price-box__btn" >
              <a href="python.php" class="btn btn--purple btn--width" style="text-decoration: none;">Start now</a>
            </div>
          </div>
        </div>
        <!-- second -->
        <div class="col-md-4 col-sm-4 price-box price-box--violet">
          <div class="price-box__wrap">
            <div class="price-box__img"></div>
            <h1 class="price-box__title">
              Machine Learning
            </h1>
            <p class="price-box__people">
              Intermediate Track
            </p>
            <p class="price-box__feat">
              Perfect for those with Python knowledge who want to dive into ML
            </p>
            <ul class="price-box__list">
              <li class="price-box__list-el">Supervised & Unsupervised Learning</li>
              <li class="price-box__list-el">Model Evaluation Techniques</li>
              <li class="price-box__list-el">Build ML Projects</li>
              <li class="price-box__list-el">🆓 Free Forever </li>
            </ul>
            <div class="price-box__btn">
              <a href="ML.php"class="btn btn--violet btn--width"  style="text-decoration: none;">Start now</a>
            </div>
          </div>
        </div>

        <!-- terzo -->
        <div class="col-md-4 col-sm-4 price-box price-box--blue">
          <div class="price-box__wrap">
            <div class="price-box__img"></div>
            <h1 class="price-box__title">
              Data Science
            </h1>
            <p class="price-box__people">
              Comprehensive Track
            </p>
            <p class="price-box__feat">
              Ideal for anyone wanting to master data-driven decision making
            </p>
            <ul class="price-box__list">
              <li class="price-box__list-el">Data Wrangling & Cleaning</li>
              <li class="price-box__list-el">Exploratory Data Analysis (EDA)</li>
              <li class="price-box__list-el">Data Visualization & Storytelling</li>
              <li class="price-box__list-el">🆓 Free Forever </li>
            </ul>
            <div class="price-box__btn">
              <a class="btn btn--blue btn--width">Start now</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 price-box price-box--blue">
          <div class="price-box__wrap">
            <h2>Python Code Editor</h2>
            <button class="run-button" onclick="runCode()">Run Code</button>
            <div class="editor-container">
              <div class="editor">
                <textarea id="code"></textarea>
              </div>
              <div class="output">
                <pre id="outputText">Output will be shown here...</pre>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  </div>
  </div>
  </div>






  <div class="sect sect--padding-bottom  " >
    <div class="container">
      <div class="row">
        <h1 class="row__title">
          Contact Us </h1>
        <h2 class="row__sub">Feel free to ask any questions</h2>
      </div>
      <div class="row row--margin">
        <div class="col-md-1"></div>
        <div class="col-md-4">
        
        </div>



        <div class="col-md-6"  >
          <form id="contact" class="form" >
            <div class="form-group" >
              <select class="form__field form__select" >
                <option selected value>Choose topic*</option>
                <option value=1>Pricing</option>
                <option value=2>Success Stories</option>
              </select>
            </div>
            <div class="form-group" >
              <div class="form__field--half">
                <input type="text" placeholder="Name*" class="form__field form__text"></input>
              </div>
              <div class="form__field--half">
                <input type="text" placeholder="Surname" class="form__field form__text"></input>
              </div>
            </div>

            <div class="form-group">
              <div class="form__field--half">
                <input type="text" placeholder="Email address*" class="form__field form__text"></input>
              </div>
              <div class="form__field--half">
                <input type="text" placeholder="Phone number" class="form__field form__text"></input>
              </div>
            </div>

            <div class="form-group">
              <textarea type="text" placeholder="Your messsage*" class="form__field form__textarea"></textarea>
              <button class="btn btn--up btn--width" type="submit">Submit</button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-1"></div>
    </div>
  </div>
  </div>

  <script>
    let editor = CodeMirror.fromTextArea(document.getElementById("code"), {
      mode: "python",
      theme: "default",
      lineNumbers: true,
      matchBrackets: true,
      autoCloseBrackets: true
    });

    editor.setSize("100%", "100%");
    editor.setValue("# Write your Python code here\n");
    editor.execCommand("goDocStart");

    async function runCode() {
      const code = editor.getValue();
      const outputText = document.getElementById("outputText");
      outputText.textContent = "Running...";
      try {
        const response = await fetch("https://emkc.org/api/v2/piston/execute", {
          method: "POST",
          headers: { "Content-Type": "application/json" },
          body: JSON.stringify({ language: "python", version: "3.10.0", files: [{ content: code }] })
        });
        const result = await response.json();
        outputText.textContent = result.run.output || "(No output)";
      } catch (error) {
        outputText.textContent = "Error executing code: " + error.message;
      }
    }




    const toggleBtn = document.getElementById('menu-toggle');
    const navbar = document.getElementById('navbar');

    toggleBtn.addEventListener('click', () => {
      navbar.classList.toggle('active');
    });
    
  </script>
  <?php include('inc/footer.php'); ?>