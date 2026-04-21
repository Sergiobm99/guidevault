<?php 
$pageTitle = "Contact Us | GuideVault";
$pageDesc = "Get in touch with the GuideVault team for feedback, bug reports, or business inquiries.";
include $_SERVER['DOCUMENT_ROOT'] . '/crimson-desert/header.php'; 
?>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<div class="container" style="max-width: 800px; margin: 40px auto; padding: 20px; font-family: 'Rajdhani', sans-serif;">
    
    <div style="text-align: center; margin-bottom: 40px;">
        <h1 style="color: var(--gold, #c9a84c); font-family: var(--font-display); font-size: 2.5rem; margin-bottom: 10px; text-transform: uppercase;">Get in Touch</h1>
        <p style="color: var(--text-muted, #888);">Have a question or feedback? We'd love to hear from you.</p>
    </div>

<?php if (isset($_GET['status'])): ?>
    <?php if ($_GET['status'] == 'success'): ?>
        <div style="background: rgba(46, 204, 113, 0.1); border: 1px solid #2ecc71; color: #2ecc71; padding: 15px; border-radius: 8px; margin-bottom: 25px; text-align: center;">
            <strong>Thank you!</strong> Your message has been sent successfully. We will get back to you soon.
        </div>
    <?php elseif ($_GET['status'] == 'error'): ?>
        <div style="background: rgba(231, 76, 60, 0.1); border: 1px solid #e74c3c; color: #e74c3c; padding: 15px; border-radius: 8px; margin-bottom: 25px; text-align: center;">
            <strong>Oops!</strong> There was a problem sending your message. Please try again later.
        </div>
    <?php elseif ($_GET['status'] == 'captcha_error'): ?>
        <div style="background: rgba(231, 126, 60, 0.1); border: 1px solid #e77e3c; color: #e77e3c; padding: 15px; border-radius: 8px; margin-bottom: 25px; text-align: center;">
            <strong>Verification failed!</strong> Please complete the "I'm not a robot" check to prove you are human.
        </div>
    <?php endif; ?>
<?php endif; ?>

    <form action="/crimson-desert/send-contact" method="POST" style="background: var(--dark-2, rgba(255,255,255,0.03)); padding: 30px; border-radius: 12px; border: 1px solid rgba(212, 168, 67, 0.2);">
        
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
            <div class="form-group">
                <label style="display: block; color: var(--gold); margin-bottom: 8px; font-weight: 600; font-size: 0.9rem; text-transform: uppercase;">Name</label>
                <input type="text" name="name" required placeholder="Your name" style="width: 100%; padding: 12px; background: var(--dark-1, #111); border: 1px solid rgba(255,255,255,0.1); color: var(--text); border-radius: 4px; outline: none;">
            </div>
            <div class="form-group">
                <label style="display: block; color: var(--gold); margin-bottom: 8px; font-weight: 600; font-size: 0.9rem; text-transform: uppercase;">Email</label>
                <input type="email" name="email" required placeholder="your@email.com" style="width: 100%; padding: 12px; background: var(--dark-1, #111); border: 1px solid rgba(255,255,255,0.1); color: var(--text); border-radius: 4px; outline: none;">
            </div>
        </div>

        <div style="margin-bottom: 20px;">
            <label style="display: block; color: var(--gold); margin-bottom: 8px; font-weight: 600; font-size: 0.9rem; text-transform: uppercase;">Subject</label>
            <select name="subject" style="width: 100%; padding: 12px; background: var(--dark-1, #111); border: 1px solid rgba(255,255,255,0.1); color: var(--text); border-radius: 4px; outline: none; cursor: pointer;">
                <option value="general">General Inquiry</option>
                <option value="bug">Report a Bug / Error</option>
                <option value="build">Build Suggestion</option>
                <option value="business">Business / Partnership</option>
            </select>
        </div>

        <div style="margin-bottom: 30px;">
            <label style="display: block; color: var(--gold); margin-bottom: 8px; font-weight: 600; font-size: 0.9rem; text-transform: uppercase;">Message</label>
            <textarea name="message" rows="6" required placeholder="How can we help you?" style="width: 100%; padding: 12px; background: var(--dark-1, #111); border: 1px solid rgba(255,255,255,0.1); color: var(--text); border-radius: 4px; outline: none; resize: vertical;"></textarea>
        </div>

        <div class="anti-spam-field" style="display:none !important; visibility:hidden; position:absolute; left:-9999px;">
            <label for="website_url_check">Please leave this field blank if you are human:</label>
            <input type="text" name="website_url_check" id="website_url_check" tabindex="-1" autocomplete="off">
        </div>

        <div style="margin-bottom: 20px; display: flex; justify-content: center;">
            <div class="g-recaptcha" data-sitekey="6Lfhnb8sAAAAABqFxHnTRm_H2MpF-ZnHxXS9yhmO" data-theme="dark"></div>
        </div>

        <button type="submit" class="btn btn-gold" style="width: 100%; padding: 15px; font-size: 1.1rem; justify-content: center;">
            SEND MESSAGE
        </button>
        
    </form>

    <div style="margin-top: 40px; text-align: center; color: var(--text-muted, #888); font-size: 0.9rem;">
        <p>You can also reach us directly at: <strong style="color: var(--gold);">contact@guidevault.online</strong></p>
    </div>

</div>

<?php 
include $_SERVER['DOCUMENT_ROOT'] . '/crimson-desert/footer.php'; 
?>