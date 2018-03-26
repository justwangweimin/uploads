import React, {Component} from 'react';
import { WhiteSpace } from 'antd-mobile';
import Ad from './ad';
import Menu from './menu';
import Notice from './notice';
import Hotjob from './hotjob';
import Recommendedjob from './recommendedjob';
import Famouscompany from './famouscompany';


class Home extends Component{
  constructor(props){
    super(props);
  }
  render(){
    return (
      <div>
        <Ad/>
        <WhiteSpace size="xs" />
        <Menu/>
        <WhiteSpace size="xs" />
        <Notice/>
        <WhiteSpace size="xs" />
        <Hotjob/>
        <WhiteSpace size="xs" />
        <Recommendedjob/>
        <WhiteSpace size="xs" />
        <Famouscompany/>
        <WhiteSpace size="xs" />
      </div>
    );
  }
}
export default Home;