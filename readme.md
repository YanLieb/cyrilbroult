**Cyril Broult Theme for WordPress**

## Encrypted Database File

The `cyrilbroult_dev.sql.enc` file is an encrypted database backup. To decrypt it, use:

```bash
openssl enc -aes-256-cbc -d -in cyrilbroult_dev.sql.enc -out cyrilbroult_dev.sql -k "YOUR_PASSPHRASE" -md sha256
```

Replace `YOUR_PASSPHRASE` with the actual passphrase.
