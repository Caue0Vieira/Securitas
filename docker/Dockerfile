# Usando uma imagem base do PHP com Nginx e Node.js
FROM webdevops/php-nginx-dev:8.4

# Instalar Node.js e npm
RUN curl -sL https://deb.nodesource.com/setup_22.15.x | bash - && \
    apt-get update && \
    apt-get install -y nodejs

# Configurações do projeto (ajuste conforme necessário)
WORKDIR /var/www

# Copiar os arquivos do projeto para o container
COPY . .

# Instalar dependências do PHP
RUN composer install --no-interaction --prefer-dist

# Instalar dependências do Node.js
RUN npm install

# Expor as portas necessárias
EXPOSE 80
EXPOSE 443

# Comando padrão para rodar o PHP-FPM e Nginx
CMD ["php-fpm", "-D"]
