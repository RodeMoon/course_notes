# Creación de un VPS en Oracle Cloud

## 📌 Introducción
Se realizó la creación y configuración de un **Servidor Privado Virtual (VPS)** en **Oracle Cloud**, utilizando la ventaja de tener una cuenta gratuita con ayuda del correo institucional. 

## 📂 Contenido
1. **Creación de una cuenta en Oracle Cloud**
2. **Configuración de una instancia de VPS**
3. **Acceso al servidor mediante SSH**
4. **Configuración básica del sistema**
5. **Verificación de conectividad**

---

## 1️⃣ Creación de una cuenta en Oracle Cloud
1. Ir a [Oracle Cloud](https://www.oracle.com/cloud/)
2. Hacer clic en **“Comenzar gratis”**
3. Completar los datos de registro (nombre, correo, país, etc.)
![Registro en Oracle Cloud](01_VPS_OracleCloud/img/1_creacion_cuenta.png)
4. Verificar el correo electrónico
5. Completar los demás datos de registro así como agregar un método de pago (solo para validación, no se realiza el cobro)
6. Agregar el segundo método de autenticación para el acceso a la cuenta, instalando en nuestro dispositivo móvil la app:
![Aplicación de autenticación](01_VPS_OracleCloud\img\2_appAuthen.jpeg)
7. Acceder a la consola de Oracle Cloud
![Acceso a la consola de Oracle Cloud](01_VPS_OracleCloud\img\3_accesso_consola.png)
8. Dar acceso desde la aplicación móvil
![Aviso de permitir acceso en Oracle Cloud](01_VPS_OracleCloud\img\4_verificacionApp.png)
![Permitir acceso desde la aplicación móvil](01_VPS_OracleCloud\img\5_appAcceso.jpeg)

---

## 2️⃣ Configuración de una instancia de VPS
1. Una vez en la consola, en el menú lateral, ir a **Compute → Instancias**
![Crear instancia](01_VPS_OracleCloud\img\6_crearInstancia.png)
2. Hacer clic en **“Create instance”**
![Crear instancia](01_VPS_OracleCloud\img\7_crearInstancia.png)
4. Configurar los siguientes parámetros:
   - **Nombre de la instancia:** VPS-Oracle
   - **Imagen del sistema:** Ubuntu 22.04 / Oracle Linux 8
   - **Forma:** Ampere A1 (ARM) o VM.Standard.E2.1.Micro (x86)
   - **Red Virtual:** Mantener por defecto
   - **Clave SSH:** Subir o generar una clave pública
5. Hacer clic en **“Crear”** y esperar a que la instancia se aprovisione

---

## 3️⃣ Acceso al Servidor mediante SSH
1. Copiar la **IP pública** de la instancia en Oracle Cloud
2. Abrir la terminal y ejecutar:
   ```bash
   ssh -i ruta_de_tu_clave_privada opc@IP_PUBLICA
   ```
3. Aceptar la conexión si es la primera vez

---

## 4️⃣ Configuración Básica del Sistema
1. **Actualizar el sistema:**
   ```bash
   sudo apt update && sudo apt upgrade -y
   ```
2. **Configurar el firewall:**
   ```bash
   sudo ufw allow OpenSSH
   sudo ufw enable
   ```
3. **Crear un usuario administrativo:**
   ```bash
   sudo adduser miusuario
   sudo usermod -aG sudo miusuario
   ```
4. **Configurar acceso SSH sin root:**
   ```bash
   sudo nano /etc/ssh/sshd_config
   ```
   - Buscar `PermitRootLogin yes` y cambiarlo a `no`
   - Guardar y salir (`CTRL + X`, `Y`, `Enter`)
   - Reiniciar el servicio SSH:
     ```bash
     sudo systemctl restart ssh
     ```

---

## 5️⃣ Verificación de Conectividad
1. Ejecutar el comando:
   ```bash
   ping -c 4 google.com
   ```
   - Si recibes respuestas, la conexión está activa.

2. Probar nuevamente el acceso SSH con el nuevo usuario:
   ```bash
   ssh -i ruta_de_tu_clave_privada miusuario@IP_PUBLICA
   ```

---

📌 **Siguiente paso:** [Configuración de llaves SSH](../02_Criptografia_SSH/README.md)
