import React from 'react';

export class Footer extends React.Component{
    constructor(props){
      super(props);
      this.state = props;   
    }

    componentDidMount(){
        console.log('conectando ao bd...')
       
        setInterval(
            () => {this.atualizar();}
            , 60000
        );
    }

    atualizar(){
        this.setState(
            {
                dados: { dia: this.state.dados.dia + 1}            }
        );
    }

    componentWillUnnmount(){
        console.log('desconectando o bd...')
    }

    render(){
      return(
        <footer>
          <p>Copyright Eletro {this.state.dados.dia} - {this.state.dados.mes} - {this.state.dados.ano} </p>
        </footer>
      )
    }
  }
  export function Header(){
    return(
        <footer>
            <p>Header</p>
        </footer>
    );
}
  
  export function Left(){
      return(
          <footer>
              <p>Footer dados ={ {ano:1888, mes:11, dia:4}} </p>
          </footer>
      );
  }

  export function Right(){
      return(
          <footer>
              <p>Right</p>
          </footer>
      );
  }

  export function Side(){
      return(
          <footer>
              <p>Side</p>
          </footer>
      );
  }

  export default Footer;