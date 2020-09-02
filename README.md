# phpcodesniffer-git-hook
GIT hook for php-codesniffer

## System Requirement
This requires git 2.9+ (June 2016).



## Install
Clone the project, then run following code in this repo directory.
```bash
composer install
```

When all dependencies installed, run following code to apply new hooks
```bash
git config --global core.hooksPath /path/to/phpcodesniffer-git-hook/hooks
```

## Features
Once installed, `git commit` command will trigger the check of codesniffer. If it's something codesniffer can fix it will fix the problem automatically.
