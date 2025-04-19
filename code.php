<?php include('inc/header1.php'); ?>

  
    
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.12/ace.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.12/mode-python.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.12/theme-monokai.js"></script>
    <script src="https://cdn.jsdelivr.net/pyodide/v0.23.4/full/pyodide.js"></script>
    
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Francois+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    
    <style>
       *{ margin: 0;
        padding: 0;

       }
        
        button {
            margin: 5px;
            cursor: pointer;
            border-radius: 4px;
            font-family: 'Francois One', sans-serif;
            transition: all 0.3s ease;
            white-space: nowrap;
        }
        
        button:hover {
            opacity: 0.9;
            transform: translateY(-2px);
        }
        
        #button1 {
            background-color: #9708CC;
            padding: 8px 20px;
            border: none;
            color: white;
            font-size: 14px;
        }
        
        .editor-container {
            position: relative;
            height: 300px;
            width: 100%;
            margin: 15px 0;
            border: 2px solid #333;
            border-radius: 5px;
            overflow: hidden;
        }
        
        #editor {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            font-size: 14px;
        }
        
        .output-container {
            width: 100%;
            height: 200px;
            border: 2px solid #333;
            border-radius: 5px;
            background-color: #2F3129;
            color: #F8F8F2;
            font-family: 'Roboto Mono', monospace;
            padding: 10px;
            overflow-y: auto;
            margin: 15px 0;
            white-space: pre-wrap;
        }
        
        .face1 {
            text-align: center;
            padding: 20px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        
        #button2 {
            background-color: #4880ED;
            padding: 6px 12px;
            border: none;
            color: white;
            font-size: 12px;
        }
        
        #button4 {
            background-color: #FEE140;
            padding: 6px 12px;
            border: none;
            color: black;
            font-size: 12px;
        }
        
        #button3 {
            background-color: #F50B9A;
            padding: 8px 20px;
            border: none;
            color: white;
            font-size: 14px;
        }
        
        #button5 {
            background-color: #1F618D;
            padding: 8px 20px;
            border: none;
            color: white;
            font-size: 14px;
        }
        
        #button6 {
            background-color: #27AE60;
            padding: 6px 12px;
            border: none;
            color: white;
            font-size: 12px;
        }
        
        #button7 {
            background-color: #955AF9;
            padding: 8px 20px;
            border: none;
            color: white;
            font-size: 14px;
        }
        
        input {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #D9D9D9;
            border-radius: 4px;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.1);
            font-family: 'Patrick Hand', cursive;
            margin: 10px 0;
        }
        
        .face2 {
            display: none;
            padding: 15px;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .continuebtn {
            background-color: #f2d533;
            color: #000;
            font-weight: bold;
            border: none;
            padding: 12px 30px;
            border-radius: 25px;
            font-size: 16px;
            text-transform: uppercase;
            margin: 20px 0;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        
        #imgface {
            max-width: 250px;
            margin-bottom: 20px;
        }
        
        #facep {
            font-size: 18px;
            max-width: 600px;
            margin: 0 auto;
        }
        
        .blink_me {
            animation: blinker 1.3s linear infinite;
        }
        
        @keyframes blinker {
            50% {
                opacity: 0;
            }
        }
        
       /* .header {
            background: linear-gradient(to right, #3776AB, #FFD43B);
            color: white;
            padding: 15px;
            text-align: center;
            border-radius: 5px;
            margin-bottom: 15px;
        }*/
        
        .btn-container {
            display: flex;
            flex-wrap: wrap;
            gap: 5px;
            margin: 10px 0;
            justify-content: center;
        }
        
        .social a {
            color: white;
            text-decoration: none;
            margin: 0 5px;
        }
        
        .loading {
            display: none;
            text-align: center;
            padding: 10px;
            color: #3776AB;
            font-weight: bold;
        }
        
        .spinner {
            border: 4px solid rgba(0, 0, 0, 0.1);
            width: 36px;
            height: 36px;
            border-radius: 50%;
            border-left-color: #3776AB;
            animation: spin 1s linear infinite;
            margin: 10px auto;
        }
        
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .btn-container {
                justify-content: center;
            }
            
            button {
                padding: 6px 12px;
                font-size: 12px;
            }
            
            .editor-container {
                height: 250px;
            }
            
            .output-container {
                min-height: 150px;
                height: auto;
                max-height: 250px;
            }
            
            #facep {
                font-size: 16px;
            }
        }
        
        @media (max-width: 480px) {
            .btn-container {
                flex-direction: row;
                flex-wrap: wrap;
            }
            
            button {
                margin: 3px;
                padding: 5px 8px;
                font-size: 11px;
            }
            
            .editor-container {
                height: 200px;
            }
            
            .output-container {
                min-height: 120px;
                height: auto;
                max-height: 200px;
            }
            
            #imgface {
                max-width: 150px;
            }
            
            #facep {
                font-size: 14px;
            }
            
            #button1, #button3, #button5, #button7 {
                padding: 6px 12px;
                font-size: 12px;
            }
        }
    </style>
</head>

<body>
    <!-- Splash screen -->
    <section class="face1">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Python-logo-notext.svg/1869px-Python-logo-notext.svg.png" id="imgface" alt="Python Logo">
        <p id="facep">Free online Python editor for you to run and test your Python code directly in your browser.</p>
        <button class="continuebtn">Start Coding</button>
        <p style="color:black;font-weight:bold;">Created By<span class="blink_me"> <font color="red"><b>CodeMonk</b></font></span></p>
    </section>

    <!-- Main editor section -->
    <section class="face2">
        <div class="header">
            <h3 style="font-family: 'Francois One', sans-serif;">AG PYTHON EDITOR v2</h3>
        </div>

        <!-- File name input -->
        <input id="inputFileNameToSaveAs" placeholder="Filename (e.g. script.py)">

        <!-- Code editor -->
        <div class="editor-container">
            <div id="editor">print("Hello, Python!")
# Write your Python code here
name = input("What's your name? ")
print(f"Hello, {name}!")</div>
        </div>

        <!-- Code snippet buttons -->
        <div class="btn-container" id="tbr">
            <button id="button2" onclick="insertText('()')">( )</button>
            <button id="button2" onclick="insertText('[]')">[ ]</button>
            <button id="button2" onclick="insertText('{}')">{ }</button>
            <button id="button2" onclick="insertText('\"\"')">""</button>
            <button id="button2" onclick="insertText('\'\'')">''</button>
            <button id="button2" onclick="insertText(':')">:</button>
            <button id="button2" onclick="insertText('#')">#</button>
            <button id="button2" onclick="insertText('    ')">Tab</button>
            <button id="button2" onclick="insertText('def function_name():\n    pass')">def</button>
            <button id="button2" onclick="insertText('for i in range(10):\n    pass')">for</button>
            <button id="button2" onclick="insertText('if condition:\n    pass\nelse:\n    pass')">if-else</button>
        </div>

        <!-- Action buttons -->
        <div class="btn-container">
            <button id="button1" onclick="runPythonCode()">Run Code <i class="fa fa-play"></i></button>
            <button id="button3" onclick="copyCode()">Copy Code <i class="fa fa-copy"></i></button>
            <button id="button5" onclick="saveTextAsFile()">Download <i class="fa fa-download"></i></button>
            <button id="button7" onclick="shareCode()">Share <i class="fa fa-share-alt"></i></button>
        </div>

        <!-- Loading indicator -->
        <div id="loading" class="loading">
            <div class="spinner"></div>
            <p>Running Python code...</p>
        </div>

        <!-- Output display -->
        <div id="output" class="output-container">Output will appear here...</div>

        <!-- Help & social buttons -->
        <!-- <div class="btn-container">
            <button id="button4" onclick="showHelp()"><b>Help <i class="fa fa-question-circle"></i></b></button>
            <button id="button6"><i class="fa fa-whatsapp"></i><a href="https://amitgajare.blogspot.com/" style="text-decoration:none;color:white;"> Website</a></button>
        </div> -->

        <!-- Footer -->
       <!--  <footer>
            <div class="social" align="center">
                <label style="font-size:15px;">Follow Us </label> |
                <a href="https://www.instagram.com/amitgajare_"><i class="fa fa-instagram"></i></a> |
                <a href="https://in.pinterest.com/Amitgajare_"><i class="fa fa-pinterest"></i></a>
            </div>
            <div class="copyright" align="center">
                <script>
                    document.write('&copy;');
                    document.write(' 2020 - ');
                    document.write(new Date().getFullYear());
                    document.write(' Amit Gajare - All Rights Reserved.');
                </script>
            </div>
        </footer> -->
    </section>

    <script>
        // Initialize Ace Editor
        let editor;
        let pyodide;
        
        $(document).ready(function() {
            // Set up Ace editor
            editor = ace.edit("editor");
            editor.setTheme("ace/theme/monokai");
            editor.session.setMode("ace/mode/python");
            editor.setFontSize(14);
            editor.setOptions({
                enableBasicAutocompletion: true,
                enableSnippets: true,
                enableLiveAutocompletion: true,
                useSoftTabs: true,
                tabSize: 4
            });
            
            // Start button handler
            $(".continuebtn").click(function() {
                $(".face1").fadeOut();
                $(".face2").fadeIn();
                editor.focus();
            });
            
            // Initialize Pyodide when the page loads
            initializePyodide();
        });
        
        async function initializePyodide() {
            const outputArea = document.getElementById("output");
            outputArea.innerHTML = "Loading Python interpreter... This may take a moment (about 10-20 seconds)...";
            
            try {
                pyodide = await loadPyodide({
                    indexURL: "https://cdn.jsdelivr.net/pyodide/v0.23.4/full/"
                });
                
                // Set up Python environment
                await pyodide.loadPackage("micropip");
                outputArea.innerHTML = "Python interpreter loaded successfully. Ready to run code!";
            } catch (err) {
                outputArea.innerHTML = `Failed to load Python interpreter: ${err.message}. Please refresh the page and try again.`;
                console.error("Pyodide loading error:", err);
            }
        }
        
        // Insert text at current cursor position in the editor
        function insertText(text) {
            editor.session.insert(editor.getCursorPosition(), text);
            editor.focus();
        }
        
        // Run Python code
        async function runPythonCode() {
            if (!pyodide) {
                alert("Python interpreter is still loading. Please wait a moment and try again.");
                return;
            }
            
            const outputArea = document.getElementById("output");
            const loadingIndicator = document.getElementById("loading");
            
            // Show loading spinner
            loadingIndicator.style.display = "block";
            outputArea.innerHTML = "Running...";
            
            try {
                // Get the user's code
                const code = editor.getValue();
                
                // Prepare for capturing stdout and stderr
                await pyodide.runPythonAsync(`
                    import sys
                    from io import StringIO
                    sys.stdout = StringIO()
                    sys.stderr = StringIO()
                    
                    # Define a custom input function to handle browser input
                    def input(prompt=""):
                        from js import window
                        return window.prompt(prompt) or ""
                `);
                
                // Execute the code
                await pyodide.runPythonAsync(code);
                
                // Get stdout and stderr content
                const stdout = pyodide.runPython("sys.stdout.getvalue()");
                const stderr = pyodide.runPython("sys.stderr.getvalue()");
                
                // Display output
                if (stderr && stderr.trim() !== "") {
                    outputArea.innerHTML = `<span style="color: #ff5252;">Error:</span>\n${stderr}`;
                } else if (stdout && stdout.trim() !== "") {
                    outputArea.innerHTML = stdout;
                } else {
                    outputArea.innerHTML = "Code executed successfully with no output.";
                }
            } catch (err) {
                outputArea.innerHTML = `<span style="color: #ff5252;">Error:</span>\n${err.message}`;
                console.error("Python execution error:", err);
            } finally {
                // Reset stdout and stderr
                try {
                    await pyodide.runPythonAsync(`
                        sys.stdout = sys.__stdout__
                        sys.stderr = sys.__stderr__
                    `);
                } catch (e) {
                    console.error("Error resetting stdout/stderr:", e);
                }
                
                // Hide loading spinner
                loadingIndicator.style.display = "none";
            }
        }
        
        // Copy code to clipboard
        function copyCode() {
            const code = editor.getValue();
            
            navigator.clipboard.writeText(code).then(() => {
                alert("Code copied to clipboard!");
            }).catch(() => {
                // Fallback for browsers that don't support clipboard API
                const textarea = document.createElement("textarea");
                textarea.value = code;
                document.body.appendChild(textarea);
                textarea.select();
                document.execCommand("copy");
                document.body.removeChild(textarea);
                alert("Code copied to clipboard!");
            });
        }
        
        // Save code as a file
        function saveTextAsFile() {
            const textToSave = editor.getValue();
            if (!textToSave.trim()) {
                alert("There's no code to download!");
                return;
            }
            
            let fileNameToSaveAs = document.getElementById("inputFileNameToSaveAs").value;
            if (!fileNameToSaveAs) {
                fileNameToSaveAs = "script.py";
            } else if (!fileNameToSaveAs.endsWith(".py")) {
                fileNameToSaveAs += ".py";
            }
            
            const textToSaveAsBlob = new Blob([textToSave], {type: "text/plain"});
            const textToSaveAsURL = window.URL.createObjectURL(textToSaveAsBlob);
            
            const downloadLink = document.createElement("a");
            downloadLink.download = fileNameToSaveAs;
            downloadLink.href = textToSaveAsURL;
            downloadLink.style.display = "none";
            document.body.appendChild(downloadLink);
            
            downloadLink.click();
            
            // Clean up
            window.URL.revokeObjectURL(textToSaveAsURL);
            document.body.removeChild(downloadLink);
        }
        
        // Share code via WhatsApp
        function shareCode() {
            const code = editor.getValue();
            if (!code.trim()) {
                alert("There's no code to share!");
                return;
            }
            
            const encodedCode = encodeURIComponent(code);
            const shareUrl = `https://api.whatsapp.com/send?text=${encodedCode}`;
            
            window.open(shareUrl, '_blank');
        }
        
        // Show help dialog
        function showHelp() {
            alert("Python Code Editor Features:\n\n" +
                  "1. Write and run Python code directly in your browser\n" +
                  "2. Syntax highlighting and auto-completion\n" +
                  "3. Ready-made code snippets with the buttons above the editor\n" +
                  "4. Download your code as a .py file\n" +
                  "5. Copy code to clipboard\n" +
                  "6. Share code with others\n\n" +
                  "Tips:\n" +
                  "- Use input() for user input during execution\n" +
                  "- The editor supports standard Python libraries\n" +
                  "- Tab key adds proper indentation\n" +
                  "- First run may take 10-20 seconds to load Python");
        }
    </script>
    <?php include('inc/footer1.php'); ?>
</body>
