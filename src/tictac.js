import React, {Component} from 'react';

export class TickTack extends Component {
    constructor(props) {
        super(props);
        this.state = {
            date: new Date()
        };
    }

    componentDidMount(){
        this.timerId = setInterval(
            () => this.tick(), 1000
        );
    }

    componentWillUnmount(){
        clearInterval(this.timerID);
    }

    tick() {
        this.setState({
            date: new Date()
        });
    }

render() {
    return(
        <div>
            <h1>Hello, world!</h1>
            <h2>It is {this.state.date.toLocaleTimeString()}.</h2>
        </div>
    );
}
}


/*
const { render } = require("@testing-library/react");

class TickTack extends React.Component {
    constructor(props) {
        super(props);
        this.state = {date: new Date() };
    }

    componentDidMount(){
        this.timerId = setInterval(
            () => this.tick(),
            1000
        );
    }

    componentWillUnmount(){
        clearInterval(this.timerID);
    }

    tick() {
        this.setState({
            date: new Date()
        });
    }
}

render() {
    return(
        <div>
            <h1>Hello, world!</h1>
            <h2>It is {this.state.date.toLocaleTimeString()}.</h2>
        </div>
    )
}

ReactDOM.render(
    <Clock/>
    document.getElementById('root')
);






/*
function time(){
    const name = 'Icaro';
    const element = (
        <div>
            <h1>
                Olá, {name}
            </h1>
            <h2>
                Hora: { new Date().toLocaleTimeString()}.
            </h2>
        </div>
    )
}
*/