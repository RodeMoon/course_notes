# Tranferencia de archivos con SCP

## 📌 Introducción
SCP (Secure Copy Protocol) es un protocolo que permite la transferencia segura de archivos entre un cliente y un servidor a través de SSH. Esto es útil para subir archivos a un VPS o descargar archivos desde él.

### **1. Enviar un archivo desde la PC al servidor**

Usar el siguiente comando:

```sh
scp archivo_local.txt usuario@IP_SERVIDOR:/ruta/destino/
```
- **Ejemplo 1:**
```sh
scp archivo_local.txt usuario@IP_SERVIDOR:/ruta/destino/
```

- **Ejemplo 2:**
Si se esta usando autenticación con llaves SSH, se debe especificar la llave privada con `-i`:
```sh
scp -i ~/.ssh/mi_llave.pem archivo.txt usuario@IP_SERVIDOR:/ruta/destino/
```
---

### **2. Descargar un archivo desde el servidor a la PC**

```sh
scp usuario@IP_SERVIDOR:/ruta/archivo_remoto.txt /ruta/local/
```

- **Ejemplo:**
```sh
scp root@192.168.1.100:/home/root/archivo.txt ./
```
---

### **3. Transferir directorios completos**

Para transferir una carpeta completa, usar la opción `-r`:

#### **Subir un directorio al servidor**
```sh
scp -r mi_carpeta usuario@IP_SERVIDOR:/ruta/destino/
```

#### **Descargar un directorio desde el servidor**
```sh
scp -r usuario@IP_SERVIDOR:/ruta/directorio_remoto /ruta/local/
```