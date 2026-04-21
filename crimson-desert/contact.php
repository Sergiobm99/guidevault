<?php 
$pageTitle = "Contact Us | GuideVault";
$pageDesc = "Get in touch with the GuideVault team for feedback, bug reports, or business inquiries.";
include $_SERVER['DOCUMENT_ROOT'] . '/crimson-desert/header.php'; 
?>

<div class="container" style="max-width: 800px; margin: 40px auto; padding: 20px; font-family: 'Rajdhani', sans-serif;">
    
    <div style="text-align: center; margin-bottom: 40px;">
        <h1 style="color: var(--accent, #c9a84c); font-family: 'Cinzel', serif; font-size: 2.5rem; margin-bottom: 10px;">Get in Touch</h1>
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
    <?php endif; ?>
<?php endif; ?>
    <form action="/crimson-desert/send-contact.php" method="POST" style="background: var(--panel-color, rgba(255,255,255,0.03)); padding: 30px; border-radius: 12px; border: 1px solid var(--border-color, rgba(128,128,128,0.2));">
        
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
            <div class="form-group">
                <label style="display: block; color: var(--accent); margin-bottom: 8px; font-weight: 600; font-size: 0.9rem; text-transform: uppercase;">Name</label>
                <input type="text" name="name" required placeholder="Your name" style="width: 100%; padding: 12px; background: var(--bg-main, #111); border: 1px solid var(--border-color, #333); color: var(--text-main); border-radius: 4px; outline: none;">
            </div>
            <div class="form-group">
                <label style="display: block; color: var(--accent); margin-bottom: 8px; font-weight: 600; font-size: 0.9rem; text-transform: uppercase;">Email</label>
                <input type="email" name="email" required placeholder="your@email.com" style="width: 100%; padding: 12px; background: var(--bg-main, #111); border: 1px solid var(--border-color, #333); color: var(--text-main); border-radius: 4px; outline: none;">
            </div>
        </div>

        <div style="margin-bottom: 20px;">
            <label style="display: block; color: var(--accent); margin-bottom: 8px; font-weight: 600; font-size: 0.9rem; text-transform: uppercase;">Subject</label>
            <select name="subject" style="width: 100%; padding: 12px; background: var(--bg-main, #111); border: 1px solid var(--border-color, #333); color: var(--text-main); border-radius: 4px; outline: none; cursor: pointer;">
                <option value="general">General Inquiry</option>
                <option value="bug">Report a Bug / Error</option>
                <option value="build">Build Suggestion</option>
                <option value="business">Business / Partnership</option>
            </select>
        </div>

        <div style="margin-bottom: 30px;">
            <label style="display: block; color: var(--accent); margin-bottom: 8px; font-weight: 600; font-size: 0.9rem; text-transform: uppercase;">Message</label>
            <textarea name="message" rows="6" required placeholder="How can we help you?" style="width: 100%; padding: 12px; background: var(--bg-main, #111); border: 1px solid var(--border-color, #333); color: var(--text-main); border-radius: 4px; outline: none; resize: vertical;"></textarea>
        </div>

        <button type="submit" style="width: 100%; padding: 15px; background: var(--accent, #c9a84c); color: #000; border: none; border-radius: 4px; font-family: 'Cinzel', serif; font-weight: 700; font-size: 1.1rem; cursor: pointer; transition: transform 0.2s, filter 0.2s;">
            SEND MESSAGE
        </button>
        
    </form>

    <div style="margin-top: 40px; text-align: center; color: var(--text-muted, #888); font-size: 0.9rem;">
        <p>You can also reach us directly at: <strong style="color: var(--accent);">contact@guidevault.online</strong></p>
    </div>

</div>

<?php 
include $_SERVER['DOCUMENT_ROOT'] . '/crimson-desert/footer.php'; 
?>