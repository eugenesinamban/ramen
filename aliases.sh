# lcl

alias ramen-lcl-build="docker-compose build php-fpm lcl"
alias ramen-lcl="ramen-lcl-build && docker-compose up lcl"
alias ramen-lcl-d="ramen-lcl-build && docker-compose up -d lcl"
alias ramen-lcl-logs="docker-compose logs -f --tail 100 lcl"
alias ramen-lcl-restart="docker-compose restart lcl"
alias ramen-lcl-db-bash="docker-compose exec db bash"
alias ramen-lcl-bash="docker-compose exec lcl bash"
