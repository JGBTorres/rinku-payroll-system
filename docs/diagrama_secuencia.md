




sequenceDiagram
    autonumber
    actor Usuario
    participant UI as Interfaz (React)
    participant API as Backend (Laravel)
    participant DB as Base de Datos (PostgreSQL)

    Usuario->>UI: Ingresa ID de empleado y Mes a calcular
    UI->>API: GET /api/payroll/calculate/{id}
    
    rect rgb(240, 240, 240)
        Note right of API: Fase 1: Obtención de Datos
        API->>DB: Consultar Rol (Chofer/Cargador/Aux) y Tipo (Int/Ext)
        DB-->>API: Retorna perfil del empleado
        API->>DB: Consultar Entregas y Suplencias del mes
        DB-->>API: Retorna listado de movimientos registrados
    end

    rect rgb(200, 220, 255)
        Note right of API: Fase 2: Procesamiento de Nómina
        Note over API: 1. Calcula Sueldo Base ($30/hr x 8hrs x días trabajados)
        Note over API: 2. Suma Bonos por Rol (Chofer $10/hr, Cargador $5/hr)
        Note over API: 3. Suma Pago por Entregas ($5 c/u)
        Note over API: 4. Si es Interno -> Calcula Vales de Despensa (4%)
        Note over API: 5. Calcula ISR (9% base o 12% si sueldo bruto > $16,000)
    end
    
    API-->>UI: Retorna JSON con desglose completo y Sueldo Neto
    UI-->>Usuario: Muestra Recibo de Nómina Detallado en pantalla