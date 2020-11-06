import logo from './logo.svg';
import './App.css';


function App() {
  const name = 'AnaTertu';
  const element = (
    <div>
      <h1> Olá, {name} !</h1>
      <h2>It is {new Date().toLocaleTimeString()}</h2>
    </div>
     );
  return (
    <div className="App">
      <header className="App-header">
        <img src={logo} className="App-logo" alt="logo" />
        
        <p>
          {element}
          Olá mundo! Seja bem-vinda ao React AnaTertu!
          setInterval(App, 1000);
          Edit <code>src/App.js</code> and save to reload.
        </p>

        <a
          className="App-link"
          href="https://reactjs.org"
          target="_blank"
          rel="noopener noreferrer"
        >
          Learn React
        </a>
      </header>
    </div>
  );
}

export default App;
