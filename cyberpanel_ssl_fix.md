# How to Fix SSL on CyberPanel

If your SSL is not active after uploading your site, it is usually because **Let's Encrypt could not verify your domain**.

## Step 1: Check DNS Propagation (CRITICAL)
Before CyberPanel can issue an SSL, your domain **MUST** point to the server IP.
1. Go to [whatsmydns.net](https://www.whatsmydns.net/).
2. Enter your domain (e.g., `faresmedicalcenter.ma`) and select **A Record**.
3. Ensure all locations show your CyberPanel Server IP.
   *   *If they show different IPs*: Wait for propagation (can take 1-24 hours).
   *   *If they show Cloudflare IPs*: Make sure your SSL mode in Cloudflare is set to **Full** or **Strict**, or pause Cloudflare temporarily to issue the cert.

## Step 2: Issue SSL Manually in CyberPanel
1. Log in to your **CyberPanel Dashboard**.
2. Go to **Websites** -> **List Websites**.
3. Locate your website and click on **Issue SSL**.
4. Wait for the success message.

## Step 3: Force SSL via Terminal (If Step 2 Fails)
If the button doesn't work, running the command manually via SSH often gives a clearer error message or fixes it.

1. Connect to your server via SSH (using Putty or Terminal):
   ```bash
   ssh root@your-server-ip
   ```
2. Run the Let's Encrypt command for your specific domain:
   ```bash
   /root/.acme.sh/acme.sh --issue -d yourdomain.com -d www.yourdomain.com --cert-file /etc/letsencrypt/live/yourdomain.com/cert.pem --key-file /etc/letsencrypt/live/yourdomain.com/privkey.pem --fullchain-file /etc/letsencrypt/live/yourdomain.com/fullchain.pem -w /home/yourdomain.com/public_html --force
   ```
   *(Replace `yourdomain.com` with your actual domain name).*

## Common Errors
*   **"Verify error:Invalid response"**: Your `.htaccess` might be blocking the verification file.
    *   *Fix*: Temporarily rename `.htaccess` to `.htaccess_bak`, try issuing SSL again, then rename it back.
*   **Permissions**: Ensure `public_html` permissions are correct.
    *   *Fix*: Go to **Websites** -> **List Websites** -> **Manage** -> **File Manager** -> **Fix Permissions**.

## Final Step: Force HTTPS
Once SSL is active:
1. Go to **Websites** -> **List Websites** -> **Manage**.
2. Scroll down to **Configurations**.
3. Click **Rewrite Rules**.
4. Select template **"Force HTTPS"** and Save.
