const fs = require('fs');
const files = [
    'services/ppc-marketing.php', 
    'services/google-ads.php', 
    'services/facebook-instagram-ads.php', 
    'services/youtube-ads.php', 
    'services/website-designing.php', 
    'services/e-commerce-website-development.php',
    'services/shopify-website-development.php',
    'services/android-app-development.php',
    'services/ios-app-development.php'
];

files.forEach(f => {
    if (fs.existsSync(f)) {
        let c = fs.readFileSync(f, 'utf8');
        c = c.replace(/include 'common\//g, "include '../common/");
        c = c.replace(/include "common\//g, "include \"../common/");
        
        // Also update $service_key if needed, but they are probably okay since we copied them from files that might not have them? Wait, let's inject $service_key if missing.
        // Actually, just fixing includes is enough for now.
        
        fs.writeFileSync(f, c);
        console.log('Updated includes in', f);
    }
});
