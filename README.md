# Blog personal — Omar Lozano

Sitio personal en PHP listo para desplegar en [Vercel](https://vercel.com), con la estructura que suele pedir el curso: `vercel.json` + `index.php`.

## Quién soy

- **Ciudad:** Chimbote
- **Edad:** 25 años
- **Carrera:** Ingeniería de Sistemas e Informática
- **Universidad:** Universidad Nacional del Santa
- **Platillo favorito:** Cebiche
- **Hobby:** Ajedrez

## Archivos importantes

| Archivo | Para qué sirve |
| --- | --- |
| `index.php` | Página del blog (PHP) |
| `vercel.json` | Configuración de despliegue en Vercel |
| `assets/` | Foto, estilos e imagen de portada |
| `index.html` | Copia estática para vista previa local |

## Cómo verlo en tu PC

```bash
php -S 127.0.0.1:3847
```

Abre `http://127.0.0.1:3847`.

## Cómo publicarlo en Vercel

1. Sube este proyecto a GitHub (o importa la carpeta en Vercel).
2. En Vercel: **Add New Project** → elige el repositorio.
3. Deja el resto por defecto y pulsa **Deploy**.
4. Vercel usará `vercel.json` para ejecutar `index.php` con el runtime `vercel-php`.

## Foto de perfil

Tu foto ya está en `assets/perfil.jpg` y se muestra en la sección **Sobre mí**.

Para cambiarla, reemplaza ese archivo y vuelve a desplegar.
