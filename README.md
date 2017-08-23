# phpcodesniffer-git-hook
GIT hook for php-codesniffer

## Install
```bash
composer require --dev codzo/phpcodesniffer-git-hook
```
Then edit composer.json, add following tasks
```json
"scripts": {
    "post-install-cmd": [
        "rm -rf .git/hooks",
        "ln -s ../vendor/codzo/phpcodesniffer-git-hook/hooks .git/hooks"
    ]
}
```
Run composer again:
```bash
composer install
```

## Features
Once installed, `git commit` command will trigger the check of codesniffer. If it's something codesniffer can fix it will fix the problem automatically.
