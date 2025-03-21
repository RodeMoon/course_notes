# Conceptos básicos de Markdown

## 📌 Introducción
Markdown es un lenguaje de marcado ligero que permite formatear texto de manera sencilla. A continuación, se presentan los conceptos básicos para su uso.
## 📂 Contenido
1. **Encabezados**
2. **Texto básico**
2. **Listas**
3. **Tablas**
4. **Vínculos**
5. **Imágenes**
6. **Bloques de código**
7. **Extensiones de Markdown**

---
## Encabezados

Para crear un encabezado, utilice el símbolo de almohadilla (`#`) al principio de una línea:

```
# This is level 1 (article title)
## This is level 2
### This is level 3
#### This is level 4
##### This is level 5
```

**Visualización:**

# This is level 1 (article title)

## This is level 2

### This is level 3

#### This is level 4

##### This is level 5

---
## Texto básico

Los párrafos no requieren sintaxis especial. Para aplicar formato al texto:

```
Visualización:
Este texto es **negrita**.
Este texto es *cursiva*.
Este texto es ***negrita y cursiva***.
```

**Visualización:**
Este texto es **negrita**.
Este texto es _cursiva_.
Este texto es **_negrita y cursiva_**.

Para ignorar los caracteres de formato:

```
Este texto no está \*en cursiva\*.
```
---
## Listas

### Listas numeradas

Para listas numeradas, use `1.` al inicio de cada elemento:

```
1. Primer elemento.
2. Segundo elemento.
3. Tercer elemento.
```

Visualización:

1. Primer elemento.
2. Segundo elemento.
3. Tercer elemento.

### Listas con viñetas

```
Para listas no ordenadas, use `*`, `-` o `+`:
* Primer elemento.
* Segundo elemento.
* Tercer elemento.
```

**Visualización:**
Para listas no ordenadas, use `*`, `-` o `+`:

- Primer elemento.
- Segundo elemento.
- Tercer elemento.

---
## Tablas

Las tablas en Markdown se crean con `|` para definir columnas y `-` para separar encabezados:

```
| Encabezado 1 | Encabezado 2 | Encabezado 3 |
|-------------|-------------|-------------|
| Fila 1     | Columna 2   | Columna 3   |
| Fila 2     | Columna 2   | Columna 3   |
```

**Visualización:**
| Encabezado 1 | Encabezado 2 | Encabezado 3 |
|-------------|-------------|-------------|
| Fila 1 | Columna 2 | Columna 3 |
| Fila 2 | Columna 2 | Columna 3 |

---
## Vínculos

Para agregar enlaces:

```
[Texto del enlace](https://www.ejemplo.com)
```

**Visualización:**
[Texto del enlace](https://www.ejemplo.com)

Para vínculos dentro del repositorio:

```
[Vínculo relativo](../archivo.md)
```

**Visualización:**
[Vínculo relativo](../archivo.md)

---
## Imágenes

Para agregar imágenes:

```
![Texto alternativo](https://i.pinimg.com/736x/2e/2d/b3/2e2db3394efa67302e2da1deb676839b.jpg)
```

Se visualiza de la siguiente forma:
![Texto alternativo](https://i.pinimg.com/736x/2e/2d/b3/2e2db3394efa67302e2da1deb676839b.jpg)

---
## Bloques de código

Markdown permite código en línea y bloques de código delimitados:

```
Esto es `código en línea` dentro de un párrafo.
```

**Visualización:**

Esto es `código en línea` dentro de un párrafo.

Para bloques de código multilínea, use tres comillas invertidas al principio y al final del bloque:
[```]

**Visualización:**

```
function test() {
 console.log("notice the blank line before this function?");
```
---
## Extensiones de Markdown

Markdown admite elementos personalizados como:

### Bloques de notas

```
>[!NOTE]
>
> Esto es una nota.

>[!TIP]
>
> Esto es un consejo.

>[!IMPORTANT]
>
> Esto es una advertencia importante.
```

**Visualización:**

> [!NOTE]
>
> Esto es una nota.

> [!TIP]
>
> Esto es un consejo.

> [!IMPORTANT]
>
> Esto es una advertencia importante.

### Videos incrustados

```
>[!VIDEO](https://video.tv.adobe.com/v/29770/?quality=12)
```

**Visualización:**

> [!VIDEO](https://video.tv.adobe.com/v/29770/?quality=12)
