import logo from './logo.svg';
import './App.css';
//import time from './tictac.js';
import React, {Component} from 'react';
//import ReactDOM from 'react-dom';
import {TickTack} from './tictac';
import LoginControl from './LoginControl';
//import {Footer, Header} from './Estrutura';
import NumberList from './ListItem';

class CursoHeader extends Component {
  render(){
    return <h1>{this.props.nome}</h1>
  }
}

class CursoContent extends Component{
  render(){
  return <p><strong>{this.props.item}</strong>: {this.props.valor}</p>
  }
}



function App() {
  const name = 'AnaTertu';
  const number=[1,2,3,4,5,6];
  const element = (
    <div>
      <h1> Olá, {name} !</h1>
      <h2>It is {new Date().toLocaleTimeString()}</h2>
    </div>
  );
  return (
    <div className="App">
      <header className="App-header">

        <CursoHeader nome="Desenvolvedor FullStack"/>
        <CursoContent item="Tecnologias Aprendidas" valor="JS, React, NodeJs"/>
       
        <NumberList number={number}/>

        <img src={logo} className="App-logo" alt="logo" />
        
        <p>
         {element}
          Seja bem-vinda ao mundo React! <br/>
        </p>

        <LoginControl/>
        <a
          className="App-link"
          href="https://reactjs.org"
          target="_blank"
          rel="noopener noreferrer"
        >
          Learn React
          <TickTack/>
        </a>
      </header>
     
    </div>
  );
}

export default App;

// abaixo do header < Footer dados = {{ano: 2020, mes: 11}} />