import React, { useState } from 'react';
import './app.css';

const useItems = () => {
  const [items, setItems] = useState([JSON.parse]);
  const [texto, setTexto] = useState('');

  const add = () => {
    setItems([...items, texto]);
    setTexto('');
  };

  const removerItem = (item) => {
    setItems(items.filter((el) => el !== item));
  };

  const handleChange = (event) => {
    setTexto(event.target.value);
  };

  return { items, texto, add, handleChange, removerItem };
};

const App = () => {
  const { items, texto, add, handleChange, removerItem } = useItems();

  return (
    <div className="app">
      <h1>Items</h1>
      <div>
        <input type="text" value={texto} onChange={handleChange} />
        <button type="button" onClick={add}>
          +
        </button>
      </div>

      <ul>
        {items.length > 0 &&
          items.map((el, index) => (
            <li key={index}>
              {el}
              <button onClick={() => removerItem(el)} className="remove">
                Remove
              </button>
            </li>
          ))}
      </ul>
    </div>
  );
};

export default App;

