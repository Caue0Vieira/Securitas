# Usando uma imagem base do PHP com Nginx e Node.js
FROM webdevops/php-nginx-dev:8.4

# Instalar Node.js e npm
RUN apt-get update && apt-get install -y \
        libaio1 unzip wget libzip-dev \
    && docker-php-ext-install zip \
    && rm -rf /var/lib/apt/lists/*

# Configurações do projeto (ajuste conforme necessário)
WORKDIR /app

# Copiar os arquivos do projeto para o container
COPY src /app

# Expor as portas necessárias
EXPOSE 80
EXPOSE 443
