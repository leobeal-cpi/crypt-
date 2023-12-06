
# How to generate a token in PHP for Global Auth

1. Run composer install
2. Insert your credentials in the file `index.php`
3. Create a `public_key.pem` file in the root of the project
4. Run `php index.php` and see the token
5. Check if the token is valid


```bash
curl --request POST \
  --url https://api-guard.ev-chargepoint.com/authentication/v1/ValidateToken \
  --header 'Content-Type: text/plain' \
  --data '<token>'
```
