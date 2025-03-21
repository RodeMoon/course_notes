# Creación de un VPS en Oracle Cloud

## 📌 Introducción
Se realizó la creación y configuración de un **Servidor Privado Virtual (VPS)** en **Oracle Cloud**, utilizando la ventaja de tener una cuenta gratuita con ayuda del correo institucional. 

## 📂 Contenido
1. **Creación de una cuenta en Oracle Cloud**
2. **Configuración de una instancia de VPS**
3. **Acceso al servidor mediante SSH**
4. **Configuración básica**

---

## Creación de una cuenta en Oracle Cloud
1. Ir a [Oracle Cloud](https://www.oracle.com/cloud/)
2. Hacer clic en **“Comenzar gratis”**
3. Completar los datos de registro (nombre, correo, país, etc.)  

![Registro en Oracle Cloud](https://github.com/RodeMoon/course_notes/blob/main/01_VPS_OracleCloud/img/1_creacion_cuenta.png?raw=true)

4. Verificar el correo electrónico para activar la cuenta
5. Completar los demás datos de registro así como agregar un método de pago (solo para validación, no se realiza el cobro)
6. Agregar el segundo método de autenticación para el acceso a la cuenta, instalando en nuestro dispositivo móvil la app:  

![Aplicación de autenticación](https://github.com/RodeMoon/course_notes/blob/main/01_VPS_OracleCloud/img/2_appAuthen.jpeg?raw=true)

7. Acceder a la consola de Oracle Cloud  

![Acceso a la consola de Oracle Cloud](https://github.com/RodeMoon/course_notes/blob/main/01_VPS_OracleCloud/img/3_accesso_consola.png?raw=true)

8. Dar acceso desde la aplicación móvil  

![Aviso de permitir acceso en Oracle Cloud](https://github.com/RodeMoon/course_notes/blob/main/01_VPS_OracleCloud/img/4_verificacionApp.png?raw=true)
![Permitir acceso desde la aplicación móvil](https://github.com/RodeMoon/course_notes/blob/main/01_VPS_OracleCloud/img/5_appAcceso.jpeg?raw=true)

---

## Configuración de una instancia de VPS
1. Una vez en la consola, en el menú lateral, ir a **Compute → Instancias**  

![Crear instancia](https://github.com/RodeMoon/course_notes/blob/main/01_VPS_OracleCloud/img/6_crearInstancia.png?raw=true)

2. Hacer clic en **“Create instance”**  

![Crear instancia](https://github.com/RodeMoon/course_notes/blob/main/01_VPS_OracleCloud/img/7_crearInstancia.png?raw=true)

4. Configurar los siguientes parámetros:
   - **Nombre de la instancia:** instance-merari
   - **Imagen del sistema:** Ubuntu 22.04
   - **Forma:** Ampere A1 (ARM) o VM.Standard.E2.1.Micro (x86)
   - **Red virtual:** Mantener por defecto
   - **Clave SSH:** Generar una clave pública para posteriormente subirla y usarla para la conexión con SSH  
   
   ![Instancia creada](https://github.com/RodeMoon/course_notes/blob/main/01_VPS_OracleCloud/img/8_instancia.png?raw=true)

---

## Acceso al servidor mediante SSH
1. Copiar la **IP pública** de la instancia en Oracle Cloud
2. Abrir la terminal y ejecutar:
   ```bash
   ssh -i ruta_clave_privada ubuntu@IP_PUBLICA
   ```
3. Aceptar la conexión si es la primera vez

---

## Configuración básica
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

