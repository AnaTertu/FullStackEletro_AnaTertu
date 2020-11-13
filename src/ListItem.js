import React, {Component} from 'react';

function ListItem(props) {
    return <li>{props.value}</li>
}

function NumberList(props) {
    const number = props.number;
    const ListItem = number.map( (number) =>
    
    <ListItem key = {number.toString()} value = {number}/>
    );

    return (

        <ul>
            {ListItem}
        </ul>
    );
}

export default NumberList;