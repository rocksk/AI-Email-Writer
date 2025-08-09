<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Email writer No sign in | sign up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap');

        body { 
            background-color: #f8f9fa;
            font-family: "Noto Sans", sans-serif; 
        }
        .email-writer-container {
            font-family: "Noto Sans", sans-serif;
            max-width: 1000px;
            background-color: white;
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            margin: 2rem auto;
        }
        .btn-generate { 
            background-color: #198754; 
            border-color: #198754; 
            color: white; 
        }
        #email-result {
            font-family: "Noto Sans", sans-serif;
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            padding: 1.5rem;
            border-radius: 0.25rem;
            margin-top: 2rem;
            white-space: pre-wrap;
            display: none;
        }
        .action-buttons {
            display: none;
            margin: 20px;
        }
        .action-buttons.show {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
        }
        a {
            text-decoration: none;
            color: black;
        }
        a:hover {
            color: blue;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="email-writer-container">
            <div class="text-center">
                <h1 class="mb-3">AI Email writer No (sign in|sign up)</h1>
                <p class="text-muted mb-4">AI Email Writer is a free tool that helps you write professional emails quickly and easily.
                    Craft Professional, compelling emails in seconds with Advanced AI Technology. Perfect for any business or personal use.</p>
            </div>

            <form id="email-form">
                <!-- Prompt Textarea -->
                <div class="mb-3">
                    <label for="prompt" class="form-label">Your Prompt</label>
                    <textarea class="form-control" id="prompt" name="prompt" rows="3" style="min-height: 100px;" placeholder="e.g Write a email to my manager for 2 days sick leave"></textarea>
                </div>

                <!-- Filter Dropdowns -->
                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <label for="tone" class="form-label">Select Tone</label>
                        <select id="tone" class="form-select">
                            <option selected>Professional</option>
                            <option>Friendly</option>
                            <option>Casual</option>
                            <option>Persuasive</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="type" class="form-label">Select Email Type</label>
                        <select id="type" class="form-select">
                            <option>Confirmation</option>
                            <option>Reminder</option>
                            <option>Follow-up</option>
                            <option>Outreach</option>
                            <option>Thank You</option>
                            <option>Feedback Request</option>
                            <option selected>Custom</option>
                        </select>
                    </div>
                </div>

                <!-- Generate Button -->
                <div class="d-grid">
                    <button type="submit" id="generate-btn" class="btn btn-generate btn-lg">
                        <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                        <i class="bi bi-pencil-square"></i> Generate Email
                    </button>
                </div>
            </form>

            <!-- Result Display Area -->
            <div id="email-result"></div>

            <!-- Action Buttons (Copy/Download) - Now placed outside the form -->
            <div id="action-buttons" class="action-buttons">
                <button id="copy-btn" type="button" class="btn btn-secondary">
                    <i class="bi bi-clipboard"></i> Copy
                </button>
                <button id="download-btn" type="button" class="btn btn-outline-secondary">
                    <i class="bi bi-download"></i> Download (.txt)
                </button>
            </div>

            <h1 class="mt-4">AI Email writer</h1>
            <p>In today's rapidly evolving corporate landscape, crafting the perfect email can be time-consuming. Whether you're a corporate employee, business professional, or entrepreneur. Be it a corporate staff, a working professional, or a self-employed individual, our AI Email Writer Tool assists you in creating professional emails within minutes. Just copy your notes, choose the required tone and category of the email, and our sophisticated AI system will generate a precisely crafted email that is ready to make a solid impression.</p>

            <h2>How to Use the AI Email Writer?</h2>
            <li>Paste your key points (or let AI generate content from scratch)</li>
            <li>Select tone & email type (professional, friendly, etc.)</li>
            <li>Generate & refine – Edit if needed, then copy & send!</li>

            <h2 class="mt-2">Why Use an AI Email Writer?</h2>
            <p>Writing effective emails is crucial for clear communication, follow-ups, and professional correspondence. However, not everyone has the time or expertise to draft the perfect message. Our AI-powered tool ensures:</p>
            <ul>✅ Time-saving – Generate high-quality emails instantly</ul>
            <ul>✅ Professional tone – Adapts to formal, friendly, or persuasive styles</ul>
            <ul>✅ Error-free content – AI-enhanced grammar and clarity</ul>
            <ul>✅ Versatile use – Ideal for business, sales, HR, and corporate communication</ul>

            <h2 class="mt-2">Key Features of the AI Email Writer</h2>
            <h4>1. Multiple Tone Options</h4>
            <p>Choose the right tone for your audience:</p>
            <li>Professional (formal corporate emails)</li>
            <li>Friendly (colleagues & team communication)</li>
            <li>Casual (informal/internal messages)</li>
            <li>Professional (formal corporate emails)</li>

            <h4 class="mt-2">2. Predefined Email Types</h4>
            <p>Select the purpose of your email for a tailored draft:</p>
            <li>Confirmation emails (meetings, orders, appointments)</li>
            <li>Reminders (deadlines, payments, follow-ups)</li>
            <li>Thank you emails (clients, colleagues, networking)</li>
            <li>Feedback requests (customer reviews, surveys)</li>
            <li>Outreach emails (sales, partnerships, networking)</li>

            <h4 class="mt-2">3. AI-Powered Smart Suggestions</h4>
            <p>The tool uses advanced AI (NLP & machine learning) to:</p>
            <li>Analyze input and generate contextually accurate emails</li>
            <li>Suggest subject lines for better open rates</li>
            <li>Ensure grammar, tone, and readability</li>

            <p class="mt-3">Our AI Email Writer ensures high-quality, professional emails in seconds, improving response rates and communication efficiency. Try it today and transform your email writing process!</p>

            <h5>Check other tools :<a href="https://allaiprompts.net/ai-tools/ai-article-generator/"> AI Article Write </a> &nbsp; <a href="https://allaiprompts.net/ai-tools/ai-about-us-generator/">About us generator</a></h5>
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const emailForm = document.getElementById('email-form');
        const generateBtn = document.getElementById('generate-btn');
        const resultDiv = document.getElementById('email-result');
        const actionButtons = document.getElementById('action-buttons');
        const copyBtn = document.getElementById('copy-btn');
        const downloadBtn = document.getElementById('download-btn');

        emailForm.addEventListener('submit', function(event) {
            event.preventDefault();

            const prompt = document.getElementById('prompt').value;
            const tone = document.getElementById('tone').value;
            const type = document.getElementById('type').value;

            const btnSpinner = generateBtn.querySelector('.spinner-border');
            const btnIcon = generateBtn.querySelector('.bi');

            // Show loading state
            btnSpinner.classList.remove('d-none');
            btnIcon.classList.add('d-none');
            generateBtn.disabled = true;

            // Show result area with loading message
            resultDiv.style.display = 'block';
            resultDiv.innerText = 'Generating your email, please wait...';
            
            // Hide action buttons during generation
            actionButtons.classList.remove('show');

            fetch('generate.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ prompt, tone, type })
            })
            .then(response => {
                console.log("Cache Status:", response.headers.get('X-Cache-Status'));
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    resultDiv.innerText = data.email;
                    // Show action buttons only after successful generation
                    actionButtons.classList.add('show');
                } else {
                    resultDiv.innerText = 'Error: ' + (data.message || 'Unknown error');
                }
            })
            .catch(error => {
                console.error('Fetch Error:', error);
                resultDiv.innerText = 'An unexpected error occurred. Please check the console.';
            })
            .finally(() => {
                // Reset button state
                btnSpinner.classList.add('d-none');
                btnIcon.classList.remove('d-none');
                generateBtn.disabled = false;
            });
        });

        // Copy Button
        copyBtn.addEventListener('click', function() {
            const textToCopy = resultDiv.innerText;
            navigator.clipboard.writeText(textToCopy).then(() => {
                // Visual feedback
                const originalHtml = copyBtn.innerHTML;
                copyBtn.innerHTML = '<i class="bi bi-check-lg"></i> Copied!';
                setTimeout(() => {
                    copyBtn.innerHTML = originalHtml;
                }, 2000);
            }).catch(err => {
                console.error('Failed to copy text: ', err);
            });
        });

        // Download Button
        downloadBtn.addEventListener('click', function() {
            const textToDownload = resultDiv.innerText;
            const blob = new Blob([textToDownload], { type: 'text/plain' });
            const url = URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = 'generated-email.txt';
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
            URL.revokeObjectURL(url);
        });
    });
    </script>
</body>
</html>