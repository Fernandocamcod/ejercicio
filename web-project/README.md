# README.md

# Proyecto Web de Inicio de Sesión y Registro de Usuarios

Este proyecto es una aplicación web que permite a los usuarios registrarse e iniciar sesión. Utiliza HTML, CSS, JavaScript, PHP y Java, y se conecta a una base de datos MySQL utilizando XAMPP.

## Estructura del Proyecto

```
web-project
├── public
│   ├── css
│   │   └── styles.css
│   ├── js
│   │   └── scripts.js
│   ├── index.html
│   ├── login.html
│   └── register.html
├── src
│   ├── php
│   │   ├── db.php
│   │   ├── login.php
│   │   └── register.php
│   └── java
│       └── User.java
├── sql
│   └── database.sql
├── .htaccess
└── README.md
```

## Instrucciones de Instalación

1. **Instalar XAMPP**: Descarga e instala XAMPP desde [Apache Friends](https://www.apachefriends.org/index.html).
2. **Configurar la Base de Datos**:
   - Abre phpMyAdmin desde el panel de control de XAMPP.
   - Importa el archivo `sql/database.sql` para crear la base de datos y las tablas necesarias.
3. **Colocar Archivos**:
   - Copia la carpeta `web-project` en el directorio `htdocs` de tu instalación de XAMPP.
4. **Iniciar Servidor**:
   - Inicia el servidor Apache y MySQL desde el panel de control de XAMPP.
5. **Acceder a la Aplicación**:
   - Abre tu navegador y visita `http://localhost/web-project/public/index.html`.

## Recomendaciones de Seguridad

- Utilizar HTTPS para cifrar la comunicación entre el cliente y el servidor.
- Validar y sanitizar todas las entradas del usuario para prevenir inyecciones SQL y ataques XSS.
- Almacenar las contraseñas de forma segura utilizando hashing (por ejemplo, bcrypt).
- Implementar medidas de protección contra ataques de fuerza bruta, como limitar los intentos de inicio de sesión.

## Uso

- **Registro**: Los nuevos usuarios pueden registrarse a través de `register.html`.
- **Inicio de Sesión**: Los usuarios existentes pueden iniciar sesión a través de `login.html`.

Este proyecto es un ejemplo básico y puede ser ampliado con características adicionales como recuperación de contraseñas, verificación de correo electrónico, y más.