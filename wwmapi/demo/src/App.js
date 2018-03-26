import React, {Component} from 'react';
import {
  Route,
  Link,
  Switch,
  Redirect
} from 'react-router-dom';
import {Layout, Icon,Button} from 'antd';
import './App.css';
import Modal4Moremenu from './components/Modal4Moremenu';
import Company from './company';
import Home from  './home';
import Job from './job';
import Jobfair from './jobfair';
import Market from './market';
import Me from './me';
import Near from './near';
import News from './news';
import Normal from './normal';
import Parttime from './parttime';
import Qa from './qa';
import Resume from './resume';
import Shop from './shop';
import Suggest from './suggest';
import Topic from './topic';

const {Header, Footer, Sider, Content} = Layout;


class App extends Component {
  constructor(props) {
    super(props);
    this.state = {
      visible: false
    };
  }
  showMore = () => {
    this.setState({
      visible: true,
    });
  }
  hideMore = () => {
    this.setState({
      visible: false
    });
  }
  render() {    
    const {visible} = this.state;
    return (
      <div>
        <Layout>
          <Content>
            <Switch>
              <Route path="/home" component={Home}/>
              <Route path="/job" component={Job}/>
              <Route path="/resume" component={Resume}/>
              <Route path="/me" component={Me}/>
              <Route path="/parttime" component={Parttime}/>
              <Route path="/normal" component={Normal}/>
              <Route path="/shop" component={Shop}/>
              <Route path="/near" component={Near}/>
              <Route path="/company" component={Company}/>
              <Route path="/jobfair" component={Jobfair}/>
              <Route path="/market" component={Market}/>
              <Route path="/qa" component={Qa}/>
              <Route path="/suggest" component={Suggest}/>
              <Route path="/topic" component={Topic}/>
              <Route path="/news" component={News}/>
            </Switch>
          </Content>
          <Footer style={styles.footer} >
            <Link to='/home' style={styles.link}>首页<Icon type="home"/></Link>
            <Link to='/job' style={styles.link}>找工作<Icon type="solution"/></Link>
            <Button onClick={this.showMore} style={styles.link}>
              <Icon type={'menu-fold'}/>
            </Button>
            <Modal4Moremenu  visible={visible} cancel={this.hideMore} />
            <Link to='/resume' style={styles.link}>找人才<Icon type="search"/></Link>
            <Link to='/me' style={styles.link}>我的<Icon type="setting"/></Link>
          </Footer>
        </Layout>
      </div>
    );
  }
}

export default App;
const styles = {
  footer: {
    position: 'fixed',
    width: '100%',
    bottom: 0,
    justifyContent: 'space-around',
    alignContent:'center',
    display: "flex",
    padding: '0px 0px'
  },
  link:{flexGrow: 1,height:'36px', lineHeight:'34px',fontSize: 12, color:'#999', flexShrink: 1, background: "#f8f8f8", width: '23%',border:'1px solid #cfd0d0',textAlign:'center'},
}
