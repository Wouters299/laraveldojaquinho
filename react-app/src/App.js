import { useState } from "react";
import { Botao } from './componentes/botao';
import './app.css'
import './index.css'
import { Texto } from './componentes/texto';


function App() {

  const[quantidade, setQuantidade] = useState(0)



  const aumenta = () => { setQuantidade((q) => q+1)
    }

  const diminui = () => { setQuantidade((q) => q-1)
  }
    return (
      <div className="app">


<br></br>

    <br></br>
    <Texto texto={quantidade} />
    <Botao disabled={quantidade === 0} onClick={diminui} className={quantidade === 0 ? "vermelho" : ""}> - </Botao>
    <Botao disabled={quantidade === 10} onClick={aumenta} className={quantidade === 10 ? "vermelho" : ""}>  + </Botao>
    </div>
  );
}

export default App;
