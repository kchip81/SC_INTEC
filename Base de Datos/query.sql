alter table usuarios MODIFY cliente VARCHAR(11);

alter table orden_servicio ADD COLUMN tipoServicio TINYINT DEFAULT 0;


-- 0 = Mantenimiento, 1 = Calibracion 
