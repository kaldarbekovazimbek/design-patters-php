🧠 Сценарий:
У тебя есть приложение, которое принимает оплату. В зависимости от выбранного метода (Payme, Click, Visa), вызывается соответствующий обработчик.
___
🏗 Структура
1. Интерфейс Payment — базовый интерфейс оплаты
2. Классы PaymePayment, ClickPayment, VisaPayment — конкретные реализации
3. PaymentFactory — фабрика, создающая нужный способ оплаты

___
🧾 Преимущества
- Легко добавлять новые методы оплаты (например, ZoodPay)
- Не нужно менять существующий код — просто добавляешь новый класс
- Централизованный контроль — PaymentFactory