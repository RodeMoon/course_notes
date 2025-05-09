# Configuración de dominio

## 📌 Introducción
Se utilizó la compra de un dominio sencillo para poder configurarlo, esto fue en la plataforma de Hostinger. 

## 📂 Contenido
1. **Compra y configuración**
2. **Configuración del DNS**

---

## Compra y configuración
1. Ir a [Hostinger](https://www.hostinger.com/), crear una cuenta e iniciar sesión.
2. En la sección de **Dominios** seleccionar la opción de **Registrar un nuevo dominio**.  

![Dominio](img/01_Dominio.png)

3. Escribir el nombre deseado del dominio, en la sección de abajo se nos mostrará las diferentes terminaciones que podremos escoger además del costo del dominio.  

![Dominio deseado](img/02_DomDeseado.png)  

![Op dominios](img/03_OpDominio.png)

4. Seleccionar la terminación deseada y proceder a la compra del dominio.  

![Compra](img/04_Compra.png)

5. Una vez realizado el pago, se nos mostrará un mensaje de confirmación y se nos redirigirá a la sección de configuración del dominio.

---

## Configuración del DNS
1. Una vez en la sección de configuración del dominio, ir seleccionar la opción de **DNS/Nameservers**.  

![DNS](img/05_DNS.png)

2. En la sección de **Administrar registros DNS** primero eliminamos todos los registros, una vez hecho esto añadimos **CNAME** con nombre **www** y en contenido es dominio que acabamos de comprar.  

![CNAME](img/06_CNAME.png)

3. Añadimos un registro **A** con nombre **@** y en contenido es la IP de nuestro servidor.  

![A](img/07_A.png)

---

Para verificar que el dominio se haya propagado correctamente se utiliza la herramienta **DNS Propagator**.  

Esta herramienta nos permite comprobar si los registros DNS han sido actualizados en diferentes servidores alrededor del mundo.  

1. Accedee a la herramienta en el siguiente [enlace](https://www.whatsmydns.net).  
2. Introducir el nombre del dominio y seleccionar el tipo de registro DNS a verificar (`A` o `CNAME`).  
4. Hacer clic en el botón **Search** para comprobar la propagación.  
 