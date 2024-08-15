<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Acerca del proyecto

Tender es un sistema web diseñado para que los usuarios puedan comprobar las condiciones meteorológicas de su zona. Sin embargo, no es solo un simple servicio de clima. Su característica más destacada es que, utilizando cálculos avanzados, ofrece recomendaciones sobre si es conveniente colgar la ropa a secar, considerando tanto las condiciones actuales como las futuras. Además, proporciona una estimación del tiempo que tardará la ropa en secarse.


## Principios y condiciones

El sistema se comenzó a desarrollar con varias condiciones autoimpuestas, aquí su listado.

- Los datos a tomar y procesar serán los proporcionados por la API del SMN (Servicio Meteorológico Nacional)
- Solo se utilizará base de datos para guardar usuarios y configuraciones del usuario, todo se hará a través de consumir la API del SMN y realizar los cálculos en el momento.
- Ni una línea de CSS, todo el frontend se desarrollará en base a Tailwind sin utilizar CSS personalizado.
