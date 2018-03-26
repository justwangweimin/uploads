import React, {Component} from 'react';
import {
    Route,
    Link,
    Redirect
} from 'react-router-dom';

import './App1.css';

class App extends Component {
    render() {
        return (
            <div>
                <h1>App</h1>
                <ul>
                    <li><Link to="/home">Home</Link></li>
                    <li><Link to="/about">About</Link></li>
                    <li><Link to="/inbox">Inbox</Link></li>
                </ul>
                <Redirect from="/" to="/home"></Redirect>
                <Route path="/home" component={Home} />
                <Route path="/about" component={About} />
                <Route path="/inbox" component={Inbox} />
            </div>
        );
    }
}

const About = () => (
    <div>
        <h3>About</h3>
    </div>
)

const Home = () => (
    <div>
        <h3>Home</h3>
        <ul>
            <li><Link to="/home/x">X</Link></li>
            <li><Link to="/home/y">Y</Link></li>
        </ul>
        <Route path="/home/x" component={X} />
        <Route path="/home/y" component={Y} />
    </div>
)
const X = () => (
    <div>
        <h4>x</h4>
    </div>
)
const Y = () => (
    <div>
        <h4>Y</h4>
    </div>
)

const Message = ({match}) => (
    <div>
        <h3>new messages</h3>
        <h3>{match.params.id}</h3>
    </div>
)

const Inbox = ({match}) => (
    <div>
        <h2>Topics</h2>
        <Route path={`${match.url}/messages/:id`} component={Message}/>
    </div>
)


export {Home,About,Inbox,App};
