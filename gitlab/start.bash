#!/bin/bash
set -e


# вспомогательная функция которая подкрашивает вывод echo
colorfull_echo () {

    #VARS
    local GREEN=$(tput setaf 2)
    local RESET=$(tput sgr0)
    local ECHO_START_LINE="${GREEN}=============================================="
    local ECHO_END_LINE="==============================================${RESET}"
    local ECHO_NEW_LINES="\n\n\n\n\n"

    # function body
    echo -e "$ECHO_NEW_LINES"
    echo -e "$ECHO_START_LINE"
    echo -e "$1"
    echo -e "$ECHO_END_LINE"

}


# install poetry
colorfull_echo "Install poetry"
curl -sSL https://raw.githubusercontent.com/python-poetry/poetry/master/get-poetry.py | python -


# install ansible via poetry
colorfull_echo "install ansible via poetry"
poetry install


# install ansible-galaxy  roles we need
colorfull_echo "install ansible-galaxy  roles we need"
ansible-galaxy install -r requirements.yml


# Create Virtual machines via vagrant
colorfull_echo "Create Virtual machines via vagrant"
poetry run vagrant up

