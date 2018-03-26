import React from 'react';
import ReactDOM from 'react-dom';
import {
    BrowserRouter  as Router,
    Route,
    Redirect
} from 'react-router-dom';
import './index.css';
import 'antd/dist/antd.css';  // or 'antd/dist/antd.less'
import 'antd-mobile/dist/antd-mobile.css';  // or 'antd-mobile/dist/antd-mobile.less'
import App from './App';
import registerServiceWorker from './registerServiceWorker';

// import { Icon, Grid } from 'antd-mobile';
//
// const Root = () => {
//   const size = ['xxs', 'xs', 'sm', 'md', 'lg'];
//   const data = size.map(item => ({
//     icon: (<Icon type="search" size={item} />),
//     text: item,
//   }));
//   return (<Grid data={data} columnNum={5} hasLine={false} activeStyle={false} />);
// };

const Root=()=>(
    <Router>
        <App>
        </App>
    </Router>
)

function callback(key) {
  console.log(key);
}

let mountNode=document.getElementById('root');
ReactDOM.render(<Root />,mountNode );
registerServiceWorker();
