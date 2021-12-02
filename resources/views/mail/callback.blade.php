<div> 
    <h2>Контактная информация</h2> 
      <p>Имя: {{ $consultation->name }} </p> 
      <p>Номер: {{ $consultation->phone }}</p> 
      <p>Email: {{ $consultation->email }}</p> 

      <h4>Предпочтительный способ связи</h4>
      <p>{{ $consultation->social }}</p> 

  </div>